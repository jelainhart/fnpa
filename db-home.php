<?php
function getRecentSightings()
{
   //reuse instance of db
   global $db;
   $query = "SELECT species, breed, fur_color, fur_pattern, eye_color, pet_size, pet_condition, additional_description, street_name, zip_code, city, email_address FROM `reports` natural join pet_sightings natural join animal natural join lost_animal natural join people natural join found_reports ORDER BY date DESC LIMIT 3";
   $statement = $db->prepare($query); //compile
   $statement->execute();
   $result = $statement->fetchAll(); //fetch() just retrieves only the first row
   $statement->closeCursor(); 
//if we want to use result must officially return it to form
    return $result;
}

?>