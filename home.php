<?php
require("connect-db.php"); //include("connect-db.php"); start db server if wa
require("db-home.php");
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
    <h1 style="
  font-size: 300%">Welcome!</h1>
  </div>

  <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 ">
                <!-- Left half of the screen -->
                <h2 style="margin-left:100px; " class="text-white text-center">Recent Sightings</h2>
                                                         
                <?php foreach ($recentSightings as $rs): ?>
                  
                  <div class="card" style="width: 450px; margin: 80px; text-align: center; padding:20px; background-color:#5d78c9">
                    <p><b><?php echo $rs['species']; ?> Sighting</b></p>
                    <p>A <?php echo $rs['pet_size']; ?> <?php echo $rs['breed']; ?> with <?php echo $rs['fur_pattern']; ?>, <?php echo $rs['fur_color']; ?> fur and <?php echo $rs['eye_color']; ?> eyes.</p>
                    <p><?php echo $rs['pet_condition']; ?> Condition. <?php echo $rs['additional_description']; ?></p>
                    <p>Found on <?php echo $rs['street_name']; ?>, in <?php echo $rs['city']; ?>, <?php echo $rs['zip_code']; ?>.</p>
                    <p>Contact: <a style="color:#b9c6ed;" href="mailto:<?php echo $rs['email_address']; ?>"><?php echo $rs['email_address']; ?></a></p>
                  </div>
                
                <?php endforeach; ?>  
                

                
            </div>
            <div class="col-md-6" >
                <!-- Right half of the screen with button -->
                <div class="button-container" style="width:650px; margin: 80px; align: center;  ">
                  <a href="addpet.php" class="btn btn-lg">Manage My Household</a>
                </div>

                

                <div class="button-container" style="width: 650px; margin: 80px; text-align: center;  ">
                  <a href="addpet.php" class="btn btn-lg">Register My Pet</a>
                </div>
             </div>
        </div>
  </div>
    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>

