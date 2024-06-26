<?php
require("connect-db.php"); //include("connect-db.php"); start db server if wa
require("db-home.php");

session_start();
//$_SESSION["person_id"] = "2" HARDCODED
$_SESSION["person_id"] = $_SESSION["person_id"];
//$sess = $_SESSION['person_id'];
//echo "session $sess";

?>

<?php 

$myPets = getMyPets($_SESSION["person_id"]); 
//var_dump($myPets);

if ($_SERVER['REQUEST_METHOD'] == 'POST')   // GET
{
  
      addComment($_POST['report_id'], $_POST['person_id'], $_POST['comment']);
  
}
  ?>

<?php $recentSightings = getRecentSightings(); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">    
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Esha Khator">
  <meta name="description" content="Small web app for CS 4750 project">
  
  <title>FNPA</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
   
  <style>
        html, body, .container-fluid, .row {
            height: 100%;
        }
        
        div {
        margin-left: auto;
        margin-right: auto;
        width: 100%;  
        }
        
        ::placeholder {
        color: #5d78c9;
        } 
   
        .button-container {
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
    <link rel="stylesheet" href="styles.css" />  
</head>

<body>
    
  <?php include('header.html') ?>
  <div class="container">
    <h1 style="margin-top:12px; font-size: 300%">Welcome! </h1> 
    <div style="float:center; padding:10px;">    
      <form action="logout.php" method="get">
        <input type="submit" value="Log out" />
      </form>
    </div>  
  </div>

  <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 ">
                <!-- Left half of the screen -->
                <h2 style=" margin-left:100px; color:#3250ab;" class=" text-center">Recent Sightings</h2>
                                                         
                <?php foreach ($recentSightings as $rs): ?>
                  
                  <div class="card" style="width: 450px; margin: 20px; text-align: center; padding:20px; background-color:#5d78c9;border:7px ; border-radius:10px;">
                    <p><b><?php echo $rs['species']; ?> Sighting!</b></p>
                    <p>A <?php echo $rs['pet_size']; ?> <?php echo $rs['breed']; ?> with <?php echo $rs['fur_pattern']; ?>, <?php echo $rs['fur_color']; ?> fur and <?php echo $rs['eye_color']; ?> eyes.</p>
                    <p><?php echo $rs['pet_condition']; ?> Condition. <?php echo $rs['additional_description']; ?></p>
                    <p>Found on <?php echo $rs['street_name']; ?>, in <?php echo $rs['city']; ?>, <?php echo $rs['zip_code']; ?>.</p>
                    <p>Contact: <a style="color:#b9c6ed;" href="mailto:<?php echo $rs['email_address']; ?>"><?php echo $rs['email_address']; ?></a> or comment below with any inquiries.</p>
                    <div style="background-color:#aabbee;width:250px;border: 4px solid #899fe0; border-radius: 3px; padding:0px">
                      <form method="post" action="home.php">
                        <input type="hidden" name="report_id" id="report_id" value="<?php echo $rs['report_id']; ?>">
                        <input type="hidden" name="person_id" id="person_id" value="<?php echo $_SESSION['person_id']; ?>">
                        <input type="text" id="comment" name="comment" placeholder="Comment here" style="width: 150px; margin-right: 0px;  text-align:left; border: 2px solid #c7d5fc">
                        <button type="submit" id="commentBtn" name="commentBtn" style="margin-left: 0px; background-color: #aabbee;  color: blue; border: 1px solid #aabbee; font-size: 15px"> 
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
                              <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0m-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707z"/>
                            </svg></button>
                      </form>
                    </div>
                  </div>
                
                <?php endforeach; ?>  
                

                
            </div>
            <div class="col-md-6" >
                <!-- Right half of the screen with button -->
                <div class="card" style="width: 450px; margin-top:55px;margin-left:300px; text-align: center; padding:20px; background-color:#c7d5fc;border:7px #5d78c9; border-radius:10px;">
                
                  <a href="household.php" style="margin:10px;" class="btn btn-lg">Manage My Household</a>
                


                  <a href="addpet.php" style="margin:10px;" class="btn btn-lg">Register new Pet</a>
                
                </div>

                <div class="card" style="width: 450px; margin-top: 10px; margin-left:300px; text-align: center; padding:20px; background-color:#c7d5fc;border:7px #5d78c9; border-radius:10px;">
                <h3> My Pets </h3>
                

                <?php foreach ($myPets as $mp): ?>
                  <div class="card" style="width: 390px; padding:20px; background-color:#899fe0;text-align: center; border:7px ; border-radius:10px;">
                    <p><b><?php echo $mp['nickname']; ?> </b></p>
                    <p>A <?php echo $mp['pet_size']; ?> sized <?php echo $mp['breed']; ?> with <?php echo $mp['fur_pattern']; ?>, <?php echo $mp['fur_color']; ?> fur and <?php echo $mp['eye_color']; ?> eyes.</p>
                    <p><?php echo $mp['additional_description']; ?> </p>
                  </div>
                <?php endforeach; ?> 
                </div>
                <div style="width: 450px; margin-top: 10px; margin-left:300px; text-align: center; padding:20px;">
                  <img src="spidercatlogo.png" alt="Spider-Cat">
                </div>
             </div>
        </div>
  </div>
    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>

