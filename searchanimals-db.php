<?php
require("connect-db.php");

function searchPets($criteria, $nickname) {
    global $db;

    $sql = "SELECT A.*, 
            P.nickname AS pet_nickname, 
            L.pet_condition, 
            S.nickname AS stray_nickname, 
            S.zip_code, 
            S.sociability,
            Pe.first_name,
            Pe.last_name,
            Pe.primary_phone_number,
            Pe.email_address,
            R.date,
            R.description,
            Fr.street_name AS found_street_name,
            Fr.zip_code AS found_zip_code,
            Fr.city AS found_city,
            Lr.monetary_rewards
            FROM Animal A
            LEFT JOIN Pets P ON A.animal_id = P.animal_id
            LEFT JOIN Lost_animal L ON A.animal_id = L.animal_id
            LEFT JOIN Stray S ON A.animal_id = S.animal_id
            LEFT JOIN Reports R ON A.animal_id = R.animal_id
            LEFT JOIN People Pe ON R.person_id = Pe.person_id
            LEFT JOIN Found_reports Fr ON R.report_id = Fr.report_id
            LEFT JOIN Lost_reports Lr ON R.report_id = Lr.report_id
            WHERE 1";

    if ($criteria['species'] !== "Any") {
        $sql .= " AND species = :species";
    }
    if ($criteria['breed'] !== "Any") {
        $sql .= " AND breed = :breed";
    }
    if ($criteria['fur_color'] !== "Any") {
        $sql .= " AND fur_color = :fur_color";
    }
    if ($criteria['fur_pattern'] !== "Any") {
        $sql .= " AND fur_pattern = :fur_pattern";
    }
    if ($criteria['eye_color'] !== "Any") {
        $sql .= " AND eye_color = :eye_color";
    }
    if ($criteria['pet_size'] !== "Any") {
        $sql .= " AND pet_size = :pet_size";
    }
    if (!empty($nickname)) {
        $sql .= " AND (P.nickname = :nickname OR S.nickname = :nickname)";
    }

    $statement = $db->prepare($sql);

    if ($criteria['species'] !== "Any") {
        $statement->bindValue(':species', $criteria['species']);
    }
    if ($criteria['breed'] !== "Any") {
        $statement->bindValue(':breed', $criteria['breed']);
    }
    if ($criteria['fur_color'] !== "Any") {
        $statement->bindValue(':fur_color', $criteria['fur_color']);
    }
    if ($criteria['fur_pattern'] !== "Any") {
        $statement->bindValue(':fur_pattern', $criteria['fur_pattern']);
    }
    if ($criteria['eye_color'] !== "Any") {
        $statement->bindValue(':eye_color', $criteria['eye_color']);
    }
    if ($criteria['pet_size'] !== "Any") {
        $statement->bindValue(':pet_size', $criteria['pet_size']);
    }
    if (!empty($nickname)) {
        $statement->bindValue(':nickname', $nickname);
    }

    $statement->execute();
    $animals = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $animals;
}
?>