<?php
function addPet($species, $breed, $fur_color, $fur_pattern, $eye_color, $size, $additional_description, $nickname)
{
   global $db;        // ensure proper data type before inserting it into a db
   
   $animal_query = "INSERT INTO Animal (species, breed, fur_color, fur_pattern, eye_color, size, additional_description) VALUES (:species, :breed, :fur_color, :fur_pattern, :eye_color, :pet_size, :additional_description)";  
   $pets_query = "INSERT INTO Pets (nickname) VALUES (:nickname)";
   
   try { 
      // prepared statement
      // pre-compile
      $statement = $db->prepare($animal_query);
      // fill in the value
      $statement->bindValue(':species', $species);
      $statement->bindValue(':breed', $breed);
      $statement->bindValue(':fur_color',$fur_color);
      $statement->bindValue(':fur_pattern', $fur_pattern);
      $statement->bindValue(':eye_color', $eye_color);
      $statement->bindValue(':pet_size',$size);
      $statement->bindValue(':additional_description', $additional_description);
      $statement->bindValue(':eye_color', $eye_color);
      // exe
      $statement->execute();
      $statement->closeCursor();

      
      $statement2 = $db->prepare($pets_query);
      $statement2->bindValue(':nickname', $nickname);
      $statement2->execute();
      $statement2->closeCursor();

      
   } catch (PDOException $e)
   {
      $e->getMessage();   // consider a generic message
   } catch (Exception $e) 
   {
      $e->getMessage();   // consider a generic message
   }

}