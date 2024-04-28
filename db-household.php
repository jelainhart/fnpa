
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
// function updateEmail($email, $person_id)
// {
//     global $db;
    
//         $query = "UPDATE people SET email_address=:email WHERE person_id=:person_id";
//         $statement = $db->prepare($query);
//         $statement->bindValue(':email', $email);
//         $statement->bindValue(':person_id', $person_id);
//         $statement->execute();
//         $statement->closeCursor();
//     }
// ?>
