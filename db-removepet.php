<?php
function removePet($animal_id)
{
    global $db;
   $query = "DELETE FROM animal where animal_id=:animal_id;";
   
   $statement = $db->prepare($query); //compile
   $statement->bindValue(':animal_id', $animal_id);
   $statement->execute();
   $statement->closeCursor();
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