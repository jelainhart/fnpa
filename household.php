<?php
require("connect-db.php"); //include("connect-db.php"); start db server if wa
require("db-household.php");

session_start();
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    
        updatePhone($_POST['phone'], $_POST['person_id']);
    
}
?>

<?php
$household = getHousehold($_SESSION["person_id"]);
//var_dump($household) ;
?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">    
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Report Missing Pet">
  <meta name="keywords" content="report, missing">
  
  <title>Household</title> 
  
  <link rel="stylesheet" href="rstyles.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">   
  
  </head>

<body> 
    
<?php include('header.html') ?>

<div class="container">
  <div class="row g-3 mt-2">
    <div class="col">
      <h2>Manage Household</h2>
      <h6>to do: code to join a household (if not done as part of initial sign up)<br>
        
        <br> 
      </h6>

<!-- display household members-->      
      <div class="card" style="width: 700px; margin-top:55px;margin-left:250px; text-align: center; padding:20px; background-color:#c7d5fc;border:7px #5d78c9; border-radius:10px;">
        <h4><b>My Household: <?php $desired_household = $household[0]; echo $desired_household['household_name']; ?> </b></h4>
        <p><?php echo $desired_household['street_number']; ?> <?php echo $desired_household['street_name']; ?>, <?php echo $desired_household['city']; ?> VA <?php echo $desired_household['zip_code']; ?></p>
        <h5>Members:</h5>
        <table style="text-align: center; background-color:#aabbee; margin: 5px;padding:15px;  border-radius:5px;">
        <tr><td><b>Name</b></td><td><b>Phone Number</b></td><td><b>Email Address</b></td></tr>
        <?php foreach ($household as $hh): ?>
            <tr>
            <td><?php echo $hh['first_name']; ?> <?php echo $hh['last_name']; ?> </td>
            <td><?php echo $hh['primary_phone_number']; ?> <td>                
            <td><?php echo $hh['email_address']; ?> <td>
        </tr>
        <?php endforeach; ?>  
        <tr> <td><br> </td> <td><br> </td> <td> <br></td> </tr>
        </table>       
    </div>
<!-- update phone-->
    <div class="card" style="width: 600px; margin-top:55px;margin-left:300px; text-align: center; padding:20px; background-color:#c7d5fc;border:7px #5d78c9; border-radius:10px;">
            <form method="post" action="household.php">
                <input type="hidden" name="person_id" id="person_id" value="<?php echo $_SESSION['person_id']; ?>">
                <label for="phone">Update Phone Number:</label>
                <input type="text" id="phone" name="phone" style="margin-left:10px"placeholder="Enter new phone number">
                <button type="submit" id="phoneBtn" name="phoneBtn" style="color: #3250ab; text-align:left; border: 2px solid #c7d5fc; border-radius:  5px;">Update</button>
            </form>
        </div>
    </div> 
    
    <div class="card" style="width: 300px; margin-top:55px;margin-left:450px; text-align: center; padding:1 px; background-color:#c7d5fc;border:7px #5d78c9; border-radius:10px;">
    <a href="removepet.php" style="margin:10px; color:red" class="btn">Remove a Pet</a>
</div>
  
</body>
</html>
