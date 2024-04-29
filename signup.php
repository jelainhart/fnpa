<?php 
require("connect-db.php");    // include("connect-db.php");
require("signup-db.php");
session_start();
?>

<?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST')   // GET
    {
        if (!empty($_POST['addPersonBtn']))    // $_GET['....']
        {
            $pwd = htmlspecialchars($_POST['pwd']);
            $pwd = password_hash($pwd, PASSWORD_BCRYPT);
            //add info to the people and the login tables
            addUser($_POST['first_name'], $_POST['last_name'],  $_POST['primary_phone_number'], $_POST['email_address'], $pwd);
            echo "User created! Redirecting to log in . . .";
            header('refresh:5; url=login.php');
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">   
  <meta http-equiv="X-UA-Compatible" content="IE=edge">  <!-- required to handle IE -->
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <title>Sign Up</title> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
  <link rel="stylesheet" href="styles.css" /> 
</head>
<body>
  
  <?php include('header3.html') ?>

  <div>
  <div style="width: 500px; margin-top: 10px; margin-left:50px; padding:20px; display: inline-block;">  
    <h1>Sign Up</h1>
    <form action="signup.php" method="post">
      First Name: <input type="text" name="first_name" required /> <br/>
      Last Name: <input type="text" name="last_name" required /> <br/>     
      Primary Phone Number: <input type="text" name="primary_phone_number" required /> <br/>   
      Email: <input type="text" name="email_address" required /> <br/>
      Password: <input type="password" name="pwd" required /> <br/>
      <input type="submit" id="addPersonBtn" name="addPersonBtn" value="Sign up" class="btn" />
    </form>
  
 
    </div>
    
    <div style="width: 350px; margin-left:50px; text-align: center; padding:10px; display: inline-block;">
      <img src="spidercatlogo.png" alt="Spider-Cat">
    </div>
</div>

  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>
</html>