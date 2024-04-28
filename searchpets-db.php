<?php
require("connect-db.php");

function searchPets($criteria) {
    global $db;
    //print_r($criteria);

    $sql = "SELECT A.*, P.nickname AS pet_nickname, L.pet_condition, S.nickname AS stray_nickname, S.zip_code, S.sociability
            FROM Animal A
            LEFT JOIN Pets P ON A.animal_id = P.animal_id
            LEFT JOIN Lost_animal L ON A.animal_id = L.animal_id
            LEFT JOIN Stray S ON A.animal_id = S.animal_id
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

    $statement = $db->prepare($sql);

    // Bind parameters
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
    $statement->execute();
    $animals = $statement->fetchAll(PDO::FETCH_ASSOC);
    //print_r($animals);
    return $animals;
}
?>