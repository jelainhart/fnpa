
<?php
//TODO connect person and report id
function addComment($report_id, $person_id, $comment){
    //Comments(comment_id, report_id, person_id, text, date)
    global $db;
    $query = "INSERT INTO Pets (report_id, person_id, text, date) VALUES (:report_id, :person_id, :comment , NOW())";
    
   try {
    $db->beginTransaction();
    // Insert into Comments table
    $statement = $db->prepare($query);
    $statement->bindValue(':report_id', $report_id);
    $statement->bindValue(':person_id', $person_id);
    $statement->bindValue(':comment', $comment);
    $statement->execute();
    $statement->closeCursor();

    $db->commit();

 } catch (PDOException $e) {
    $db->rollBack();
    echo "Error: " . $e->getMessage();
 } catch (Exception $e) {
    $db->rollBack();
    echo "Error: " . $e->getMessage();
 }
}











function getRecentSightings()
{
   //reuse instance of db
   global $db;
   $query = "SELECT species, breed, fur_color, fur_pattern, eye_color, pet_size, pet_condition, additional_description, street_name, zip_code, city, email_address, report_id FROM `reports` natural join pet_sightings natural join animal natural join lost_animal natural join people natural join found_reports ORDER BY date DESC LIMIT 3";
   $statement = $db->prepare($query); //compile
   $statement->execute();
   $result = $statement->fetchAll(); //fetch() just retrieves only the first row
   $statement->closeCursor(); 
//if we want to use result must officially return it to form
    return $result;
}

?>