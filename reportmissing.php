<?php 
require("connect-db.php");    // include("connect-db.php");
require("db-reportmissing.php");
?>


<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST')   // GET
{
  if (!empty($_POST['reportmissingBtn']))    // $_GET['....']
  {
      reportmissing($_POST['species'], $_POST['breed'], $_POST['fur_color'], $_POST['fur_pattern'], $_POST['eye_color'], $_POST['pet_size'], $_POST['additional_description'], $_POST['nickname']);
  }
}
  ?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">    
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Report Missing Pet">
  <meta name="keywords" content="report, missing">
  
  <title>Report Missing Pet</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">   
</head>

<body> 
<div class="container">
  <div class="row g-3 mt-2">
    <div class="col">
      <h2>Register a Pet</h2>
    </div>  
  </div>
<!-- TODO!!!!! get the user's person_id, create dropdown of the user's pets for them to choose which is lost -->
  <form method="post" action="reportmissing.php"> 
    <label for="animal_name">Animal Name:</label>
    <select id="animal_name" name="animal_name">
        <option value="animal_id">nickname</option>
    </select>
    <br><br>

    <label for="description">Description:</label><br>
    <textarea id="description" name="description" rows="4" cols="50"></textarea>
    <br><br>

    <label for="monetary_reward">Monetary Reward:</label>
    <input type="number" id="monetary_reward" name="monetary_reward" value="0" min="0"><br><br>

    <input type="submit" value="Submit" id="reportmissingBtn" name="reportmissingBtn" class="btn btn-dark">
   </form>
</body>

</html>