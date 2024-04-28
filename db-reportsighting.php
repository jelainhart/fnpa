<?php
//first create a new entry in the animal table (the lost pet that was sighted)
//then create a report referencing that lost pet by its animal id
function reportsighting($species, $breed, $fur_color, $fur_pattern, $eye_color, $pet_size, $additional_description, $pet_condition, $person_id, $description, $street_name, $zip_code, $city)
{
   global $db;        // ensure proper data type before inserting it into a db
   
   $Reports_query = "INSERT INTO Reports (person_id, animal_id, date, description) VALUES (:person_id, :animal_id, NOW(), :description)";  
   $Found_reports_query = "INSERT INTO Found_reports (street_name, zip_code, city) VALUES (:street_name, :zip_code, :city)";
   
   $animal_query = "INSERT INTO Animal (species, breed, fur_color, fur_pattern, eye_color, pet_size, additional_description) VALUES (:species, :breed, :fur_color, :fur_pattern, :eye_color, :pet_size, :additional_description)";
   $lost_animal_query = "INSERT INTO Pets (animal_id, pet_condition) VALUES (:animal_id, :pet_condition)";

   try {
    //Animal
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

      // Insert into lost_animal table
      $statement2 = $db->prepare($lost_animal_query);
      $statement2->bindValue(':animal_id', $animal_id);
      $statement2->bindValue(':pet_condition', $pet_condition);
      $statement2->execute();
      $statement2->closeCursor();

      $db->commit();
   
        //REPORT
     $db->beginTransaction();//<--
      // prepared statement
      // pre-compile
      $statement = $db->prepare($Reports_query);
      // fill in the value
      $statement->bindValue(':person_id', $person_id);
      $statement->bindValue(':animal_id', $animal_id);                
      $statement->bindValue(':description',$description);
      // exe
      $statement->execute();
      $report_id = $db->lastInsertId(); //<--
      $statement->closeCursor();

      
      $statement2 = $db->prepare($Found_reports_query);
      $statement2->bindValue(':report_id', $report_id);
      $statement2->bindValue(':street_name', $street_name);
      $statement2->bindValue(':zip_code', $zip_code);
      $statement2->bindValue(':city', $city);
      $statement2->execute();
      $statement2->closeCursor();

      
      $db->commit();
   } catch (PDOException $e)
   {
      $e->getMessage();   // consider a generic message
   } catch (Exception $e) 
   {
      $e->getMessage();   // consider a generic message
   }

}