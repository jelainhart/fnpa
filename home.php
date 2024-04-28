
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
    <h1>Welcome!</h1>
  </div>

  <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 ">
                <!-- Left half of the screen -->
                <h1 class="text-white text-center">Recent Sightings</h1>
            </div>
            <div class="col-md-6">
                <!-- Right half of the screen with button -->
                <div class="button-container">
                <a href="addpet.php" class="btn btn-lg">Manage Household</a>
                </div>

                <br><br>

                <div class="button-container">
                <a href="addpet.php" class="btn btn-lg">Register My Pet</a>
                </div>
             </div>
        </div>
  </div>
    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>

