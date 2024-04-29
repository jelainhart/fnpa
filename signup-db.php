<?php
//addUser($_POST['first_name'], $_POST['last_name'],  $_POST['primary_phone_number'], $_POST['email_address'], $pwd);
function addUser($first_name, $last_name, $primary_phone_number, $email_address, $pwd)
{
   global $db;

   $people_query = "INSERT INTO People (first_name, last_name, primary_phone_number, email_address) VALUES (:first_name, :last_name, :primary_phone_number, :email_address)";
   $login_query = "INSERT INTO login (email, pwd) VALUES (:email_address, :pwd)";

   try {
      $db->beginTransaction();
      // insert into People table
      $statement = $db->prepare($people_query);
      $statement->bindValue(':first_name', $first_name);
      $statement->bindValue(':last_name', $last_name);
      $statement->bindValue(':primary_phone_number', $primary_phone_number);
      $statement->bindValue(':email_address', $email_address);
      $statement->execute();
      $person_id = $db->lastInsertId(); 
      $statement->closeCursor();

      // insert into login table
      $statement2 = $db->prepare($login_query);
      $statement2->bindValue(':email_address', $email_address);
      $statement2->bindValue(':pwd', $pwd);
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