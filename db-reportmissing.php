<?php
function reportmissing($person_id, $animal_id, $description, $monetary_rewards)
{
   global $db;        // ensure proper data type before inserting it into a db
   
   $Reports_query = "INSERT INTO Reports (person_id, animal_id, date, description) VALUES (:person_id, :animal_id, NOW(), :description)";  
   $Lost_reports_query = "INSERT INTO Lost_reports (report_id, monetary_rewards) VALUES (:report_id, :monetary_rewards)";
   
   try { 
    
     $db->beginTransaction();//<--
      // prepared statement
      // pre-compile
      //insert into Reports
      $statement = $db->prepare($Reports_query);
      // fill in the value
      $statement->bindValue(':person_id', $person_id);
      $statement->bindValue(':animal_id', $animal_id);
      $statement->bindValue(':description', $description);
      // exe
      $statement->execute();
      $report_id = $db->lastInsertId(); //<--
      $statement->closeCursor();

      //insert into LR table
      $statement2 = $db->prepare($Lost_reports_query);
      $statement2->bindValue(':report_id', $report_id);
      $statement2->bindValue(':monetary_rewards', $monetary_rewards);
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


<?php
function getPets($person_id)
{
    global $db;
   $query = "SELECT nickname, animal_id FROM pets NATURAL JOIN owns NATURAL JOIN is_part_of NATURAL JOIN people where person_id=:person_id;";
   
   $statement = $db->prepare($query); //compile
   
   $statement->bindValue(':person_id', $person_id);
   $statement->execute();
   $result = $statement->fetchAll(); //fetch() just retrieves only the first row
   $statement->closeCursor(); 
//if we want to use result must officially return it to form
    return $result;
}
?>