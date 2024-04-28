<?php
function reportmissing($person_id, $animal_id, $description, $monetary_reward)
{
   global $db;        // ensure proper data type before inserting it into a db
   
   $Reports_query = "INSERT INTO Reports (person_id, animal_id, date, description) VALUES (:person_id, :animal_id, NOW(), :description)";  
   $Lost_reports_query = "INSERT INTO Lost_reports (monetary_reward) VALUES (:monetary_reward)";
   
   try { 
    
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

      
      $statement2 = $db->prepare($Lost_reports_query);
      $statement2->bindValue(':report_id', $report_id);
      $statement2->bindValue(':monetary_reward', $monetary_reward);
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