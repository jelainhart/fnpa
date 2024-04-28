<?php
function addPet($household_id, $species, $breed, $fur_color, $fur_pattern, $eye_color, $pet_size, $additional_description, $nickname)
{
   global $db;

   $animal_query = "INSERT INTO Animal (species, breed, fur_color, fur_pattern, eye_color, pet_size, additional_description) VALUES (:species, :breed, :fur_color, :fur_pattern, :eye_color, :pet_size, :additional_description)";
   $pets_query = "INSERT INTO Pets (animal_id, nickname) VALUES (:animal_id, :nickname)";
   $owns_query = "INSERT INTO Owns (animal_id, household_id) values (:animal_id, :household_id)";

   try {
      $db->beginTransaction();
      // insert into Animal table
      $statement = $db->prepare($animal_query);
      $statement->bindValue(':species', $species);
      $statement->bindValue(':breed', $breed);
      $statement->bindValue(':fur_color', $fur_color);
      $statement->bindValue(':fur_pattern', $fur_pattern);
      $statement->bindValue(':eye_color', $eye_color);
      $statement->bindValue(':pet_size', $pet_size);
      $statement->bindValue(':additional_description', $additional_description);
      $statement->execute();
      $animal_id = $db->lastInsertId(); 
      $statement->closeCursor();

      // insert into Pets table
      $statement2 = $db->prepare($pets_query);
      $statement2->bindValue(':animal_id', $animal_id);
      $statement2->bindValue(':nickname', $nickname);
      $statement2->execute();
      $statement2->closeCursor();

      //insert into Owns table
      $statement3 = $db->prepare($owns_query);
      $statement3->bindValue(':animal_id', $animal_id);
      $statement3->bindValue(':household_id', $household_id);
      $statement3->execute();
      $statement3->closeCursor();

      $db->commit();

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
function getHId($person_id)//get all member of the household the user is in
{ 
    global $db;
    $query = "SELECT household_id FROM is_part_of WHERE person_id = :person_id ;";
    $statement = $db->prepare($query); //compile
    
    $statement->bindValue(':person_id', $person_id);
    $statement->execute();
    $result = $statement->fetch(); //fetch() just retrieves only the first row
    $statement->closeCursor(); 
 //if we want to use result must officially return it to form
     return $result;
}
// ?>