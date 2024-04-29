<?php

function getLogIn($email)  
{
   global $db;
   $query = "SELECT pwd FROM login WHERE email=:email";
   $statement = $db->prepare($query);    // compile
   $statement->bindValue(':email', $email);
   $statement->execute();
   $result = $statement->fetch();
   $statement->closeCursor();

   return $result;

}

function getPersonID($email)  
{
   global $db;
   $query = "SELECT person_id FROM people WHERE email_address =:email";
   $statement = $db->prepare($query);    // compile
   $statement->bindValue(':email', $email);
   $statement->execute();
   $result = $statement->fetch();
   $statement->closeCursor();

   return $result;

}
?>