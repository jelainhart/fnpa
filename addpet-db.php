<?php
function addPet($species, $breed, $fur_color, $fur_pattern, $eye_color, $pet_size, $additional_description, $nickname)
{
   global $db;

   $animal_query = "INSERT INTO Animal (species, breed, fur_color, fur_pattern, eye_color, pet_size, additional_description) VALUES (:species, :breed, :fur_color, :fur_pattern, :eye_color, :pet_size, :additional_description)";
   $pets_query = "INSERT INTO Pets (animal_id, nickname) VALUES (:animal_id, :nickname)";

   try {
      $db->beginTransaction();
      // Insert into Animal table
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

      // Insert into Pets table
      $statement2 = $db->prepare($pets_query);
      $statement2->bindValue(':animal_id', $animal_id);
      $statement2->bindValue(':nickname', $nickname);
      $statement2->execute();
      $statement2->closeCursor();

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