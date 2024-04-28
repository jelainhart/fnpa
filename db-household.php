
<?php
function updatePhone($phone, $person_id)
{
    global $db;
    $query = "UPDATE people SET primary_phone_number=:phone where person_id=:person_id";

    $statement=$db->prepare($query);
    //fill in the value
    $statement->bindValue(':phone', $phone);
    $statement->bindValue(':person_id', $person_id);
    $statement->execute();
    $statement->closeCursor();
}
// ?>


<?php
function getHousehold($person_id)//get all member of the household the user is in
{ 
    global $db;
    $query = "SELECT household_name, email_address, first_name, last_name, primary_phone_number, city, street_name,street_number, zip_code FROM people natural join is_part_of natural join household WHERE household_id IN ( SELECT household_id FROM is_part_of WHERE person_id = :person_id );";
    $statement = $db->prepare($query); //compile
    
    $statement->bindValue(':person_id', $person_id);
    $statement->execute();
    $result = $statement->fetchAll(); //fetch() just retrieves only the first row
    $statement->closeCursor(); 
 //if we want to use result must officially return it to form
     return $result;
}
// ?>