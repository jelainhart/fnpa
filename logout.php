<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
  
  <title>Log out</title>    
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
  <link rel="stylesheet" href="styles.css" /> 
</head>
<body>

<?php session_start(); // make sessions available ?>

<?php
// Set session variables can be removed by specifying their element name to unset() function.
// A session can be completely terminated by calling the session_destroy() function.

if (count($_SESSION) > 0)     // Check if there are session variables
{   
   foreach ($_SESSION as $key => $value)
   {
      // Deletes the variable (array element) where the value is stored in this PHP.
      // However, the session object still remains on the server.    	
      unset($_SESSION[$key]);      
   }  
   //echo "sessionID = " . session_id() . "<br/>";
   session_destroy();     // complete terminate the session instance  
   //echo "sessionID = " . session_id() . "<br/>";

   // redirect to the login page immediately 
//    header('Location: login.php');

   // redirect with 5 seconds delay
   header('refresh:5; url=login.php');
}

?>
<?php include('header.html') ?>
  <div class="container">
    <h1>Goodbye!</h1>
    Successfully logged out. Redirecting to Log In . . . 
  </div>



</body>
</html>
