<?php
require("connect-db.php"); //include("connect-db.php"); start db server if wa
require("db-removepet.php");
session_start();
?>


<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    
            removePet($_POST['animal_id']);
    
    
}
?>

<?php 
$ownPets = getPets($_SESSION["person_id"]); 
//var_dump($ownPets);
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">    
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Remove Pet">
  <meta name="keywords" content="remove, pet">
  
  <title>Remove Pet</title> 
  
  <link rel="stylesheet" href="rstyles.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">   
  
  </head>

<body> 
    
  <?php include('header.html') ?>
<form method="post" action="removepet.php">
    <label for="phone">Remove Pet From Household:</label>
    <select name="animal_id" id="animal_id">
    <?php foreach ($ownPets as $pet): ?>
        <option value="<?php echo $pet['animal_id']; ?>"><?php echo $pet['nickname']; ?></option><!--id as value, nickname for user to select -->
    <?php endforeach; ?>
    </select>
    <button type="submit" id="deleteBtn" name="deleteBtn" style="color: #3250ab; text-align:left; border: 2px solid #c7d5fc; border-radius:  5px;">Remove</button>
    </form>
</body>
</html>
