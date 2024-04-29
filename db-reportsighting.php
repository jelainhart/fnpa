<?php
//first create a new entry in the animal table (the lost pet that was sighted)
//then create a report referencing that lost pet by its animal id
function reportsighting($species, $breed, $fur_color, $fur_pattern, $eye_color, $pet_size, $additional_description, $pet_condition, $person_id, $description, $street_name, $zip_code, $city)
{
   global $db;        // ensure proper data type before inserting it into a db
   
   $animal_query = "INSERT INTO Animal (species, breed, fur_color, fur_pattern, eye_color, pet_size, additional_description) VALUES (:species, :breed, :fur_color, :fur_pattern, :eye_color, :pet_size, :additional_description)";
   $lost_animal_query = "INSERT INTO lost_animal (animal_id, pet_condition) VALUES (:animal_id, :pet_condition)";

   $Reports_query = "INSERT INTO Reports (person_id, animal_id, date, description) VALUES (:person_id, :animal_id, NOW(), :description)";  
   $Found_reports_query = "INSERT INTO Found_reports (report_id, street_name, zip_code, city) VALUES (:report_id, :street_name, :zip_code, :city)";
    $pet_sightings_query= "INSERT INTO pet_sightings (report_id, animal_id) VALUES (:report_id, :animal_id)";
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

      // insert into lost_animal table
      $statement2 = $db->prepare($lost_animal_query);
      $statement2->bindValue(':animal_id', $animal_id);
      $statement2->bindValue(':pet_condition', $pet_condition);
      $statement2->execute();
      $statement2->closeCursor();

      //into reports
      $statement3 = $db->prepare($Reports_query);
      // fill in the value
      $statement3->bindValue(':person_id', $person_id);
      $statement3->bindValue(':animal_id', $animal_id);                
      $statement3->bindValue(':description', $description);
      // exe
      $statement3->execute();
      $report_id = $db->lastInsertId(); //<--
      $statement3->closeCursor();

      //insert into found reports
      $statement4 = $db->prepare($Found_reports_query);
      $statement4->bindValue(':report_id', $report_id);
      $statement4->bindValue(':street_name', $street_name);
      $statement4->bindValue(':zip_code', $zip_code);
      $statement4->bindValue(':city', $city);
      $statement4->execute();
      $statement4->closeCursor();

      //insert into pet_sightings
      $statement4 = $db->prepare($pet_sightings_query);
      $statement4->bindValue(':report_id', $report_id);
      $statement4->bindValue(':animal_id', $animal_id);
      $statement4->execute();
      $statement4->closeCursor();

      
      $db->commit();} catch (PDOException $e) {
        $db->rollBack();
        echo "Error: " . $e->getMessage();
     } catch (Exception $e) {
        $db->rollBack();
        echo "Error: " . $e->getMessage();
     }
  }
  ?>

