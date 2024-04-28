
<?php
//TODO connect person and report id
function addComment($report_id, $person_id, $comment){
    //Comments(comment_id, report_id, person_id, text, date)
    global $db;
    $query = "INSERT INTO comments (`text`, `date`, report_id, person_id) VALUES (:comment, NOW(), :report_id, :person_id)";
    
   try {
    // Insert into Comments table
    $statement = $db->prepare($query);
    $statement->bindValue(':report_id', $report_id);
    $statement->bindValue(':person_id', $person_id);
    $statement->bindValue(':comment', $comment);
    $statement->execute();
    $statement->closeCursor();
    

 } catch (PDOException $e) {
    $db->rollBack();
    echo "Error: " . $e->getMessage();
 } catch (Exception $e) {
    $db->rollBack();
    echo "Error: " . $e->getMessage();
 }
}
?>



<?php
function getMyPets($person_id)
{
    global $db;
   $query = "SELECT pets.nickname, animal.species, animal.breed, animal.fur_color, animal.fur_pattern, animal.eye_color, animal.pet_size, animal.additional_description FROM `pets` JOIN animal ON animal.animal_id=pets.animal_id JOIN owns ON animal.animal_id=owns.animal_id JOIN is_part_of ON owns.household_id = is_part_of.household_id JOIN people on people.person_id = is_part_of.person_id where people.person_id=:person_id;";
   $statement = $db->prepare($query); //compile
   
   $statement->bindValue(':person_id', $person_id);
   $statement->execute();
   $result = $statement->fetchAll(); //fetch() just retrieves only the first row
   $statement->closeCursor(); 
//if we want to use result must officially return it to form
    return $result;
}
?>





<?php
function getRecentSightings()
{
   //reuse instance of db
   global $db;
   $query = "SELECT species, breed, fur_color, fur_pattern, eye_color, pet_size, pet_condition, additional_description, street_name, zip_code, city, email_address, report_id FROM `reports` natural join pet_sightings natural join animal natural join lost_animal natural join people natural join found_reports ORDER BY report_id DESC LIMIT 3";
   $statement = $db->prepare($query); //compile
   $statement->execute();
   $result = $statement->fetchAll(); //fetch() just retrieves only the first row
   $statement->closeCursor(); 
//if we want to use result must officially return it to form
    return $result;
}

?>