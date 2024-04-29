<?php 
require("connect-db.php");    // include("connect-db.php");
require("db-reportsighting.php");

session_start();
?>


<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST')   // GET
{
  if (!empty($_POST['reportsightingBtn']))    // $_GET['....']
  {                                                                                                                                             //$pet_condition, $person_id, $description, $street_name, $zip_code, $city)
      reportsighting($_POST['species'], $_POST['breed'], $_POST['fur_color'], $_POST['fur_pattern'], $_POST['eye_color'], $_POST['pet_size'], $_POST['additional_description'], $_POST['pet_condition'], $_POST['person_id'], $_POST['description'], $_POST['street_name'], $_POST['zip_code'], $_POST['city'] );
  }
}
  ?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">    
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Report sighting Pet">
  <meta name="keywords" content="report, sighting">
  
  <title>Report sighting Pet</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">   
  
  <style>
        body {
            background-color: #aabbee;
        }

        h1, h2, h3, h4, h5, h6 {
            color: #333; /* Dark gray for headings */
        }

        .container {
            background-color: #fff; /* White container background */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
            padding: 20px;
            margin-top: 20px;
        }

        .btn {
            background-color: #405aa8;
            color: #fff;
            border-color: #405aa8;
        }

        .btn:hover {
            background-color: #aabbee; 
            border-color: #405aa8;
        }

        .form-control {
            background-color: #f9f9f9; 
            border-color: #ddd;
        }
    </style>
</head>

<body> 
  
<?php include('header.html') ?>
<div class="container">
  <div class="row g-3 mt-2">
    <div class="col">
      <h2>Report a Sighting of a Lost Pet</h2>
      <br>
  </div>
  
  
  <form method="post" action="reportsighting.php" >
    <div id="animal_desc">
    <h4>Animal Description</h4>
    <input type="hidden" name="person_id" id="person_id" value="<?php echo $_SESSION['person_id']; ?>">
    <label for="species">Species:</label>
    <select id="species" name="species">
      <option value="Dog">Dog</option>
      <option value="Cat">Cat</option>
    </select><br><br>
    <label for="breed">Breed:</label>
    <select id="breed" name="breed">
      <optgroup label="Dog Breeds">
        <option value="chihuahua">Chihuahua</option>
        <option value="japanese spaniel">Japanese Spaniel</option>
        <option value="maltese dog">Maltese Dog, Maltese Terrier, Maltese</option>
        <option value="pekinese">Pekinese, Pekingese, Peke</option>
        <option value="shih tzu">Shih-Tzu</option>
        <option value="blenheim spaniel">Blenheim Spaniel</option>
        <option value="papillon">Papillon</option>
        <option value="toy terrier">Toy Terrier</option>
        <option value="rhodesian ridgeback">Rhodesian Ridgeback</option>
        <option value="afghan hound">Afghan Hound, Afghan</option>
        <option value="basset hound">Basset, Basset Hound</option>
        <option value="beagle">Beagle</option>
        <option value="bloodhound">Bloodhound, Sleuthhound</option>
        <option value="bluetick">Bluetick</option>
        <option value="black and tan coonhound">Black-and-Tan Coonhound</option>
        <option value="walker hound">Walker Hound, Walker Foxhound</option>
        <option value="english foxhound">English Foxhound</option>
        <option value="redbone">Redbone</option>
        <option value="borzoi">Borzoi, Russian Wolfhound</option>
        <option value="irish wolfhound">Irish Wolfhound</option>
        <option value="italian greyhound">Italian Greyhound</option>
        <option value="whippet">Whippet</option>
        <option value="ibizan hound">Ibizan Hound, Ibizan Podenco</option>
        <option value="norwegian elkhound">Norwegian Elkhound, Elkhound</option>
        <option value="otterhound">Otterhound, Otter Hound</option>
        <option value="saluki">Saluki, Gazelle Hound</option>
        <option value="scottish deerhound">Scottish Deerhound, Deerhound</option>
        <option value="weimaraner">Weimaraner</option>
        <option value="staffordshire bullterrier">Staffordshire Bullterrier, Staffordshire Bull Terrier</option>
        <option value="american staffordshire terrier">American Staffordshire Terrier, Staffordshire Terrier, American Pit Bull Terrier, Pit Bull Terrier</option>
        <option value="bedlington terrier">Bedlington Terrier</option>
        <option value="border terrier">Border Terrier</option>
        <option value="kerry blue terrier">Kerry Blue Terrier</option>
        <option value="irish terrier">Irish Terrier</option>
        <option value="norfolk terrier">Norfolk Terrier</option>
        <option value="norwich terrier">Norwich Terrier</option>
        <option value="yorkshire terrier">Yorkshire Terrier</option>
        <option value="wire haired fox terrier">Wire-Haired Fox Terrier</option>
        <option value="lakeland terrier">Lakeland Terrier</option>
        <option value="sealyham terrier">Sealyham Terrier, Sealyham</option>
        <option value="airedale">Airedale, Airedale Terrier</option>
        <option value="cairn">Cairn, Cairn Terrier</option>
        <option value="australian terrier">Australian Terrier</option>
        <option value="dandie dinmont">Dandie Dinmont, Dandie Dinmont Terrier</option>
        <option value="boston bull">Boston Bull, Boston Terrier</option>
        <option value="miniature schnauzer">Miniature Schnauzer</option>
        <option value="giant schnauzer">Giant Schnauzer</option>
        <option value="standard schnauzer">Standard Schnauzer, Schnauzer</option>
        <option value="scotch terrier">Scotch Terrier, Scottish Terrier, Scottie</option>
        <option value="tibetan terrier">Tibetan Terrier, Chrysanthemum Dog</option>
        <option value="silky terrier">Silky Terrier, Sydney Silky</option>
        <option value="soft coated wheaten terrier">Soft-Coated Wheaten Terrier</option>
        <option value="west highland white terrier">West Highland White Terrier</option>
        <option value="lhasa">Lhasa, Lhasa Apso</option>
        <option value="flat coated retriever">Flat-Coated Retriever</option>
        <option value="curly coated retriever">Curly-Coated Retriever</option>
        <option value="golden retriever">Golden Retriever</option>
        <option value="labrador retriever">Labrador Retriever</option>
        <option value="chesapeake bay retriever">Chesapeake Bay Retriever</option>
        <option value="german shorthaired pointer">German Shorthaired Pointer</option>
        <option value="vizsla">Vizsla, Hungarian Pointer</option>
        <option value="english setter">English Setter</option>
        <option value="irish setter">Irish Setter, Red Setter</option>
        <option value="gordon setter">Gordon Setter</option>
        <option value="brittany spaniel">Brittany Spaniel</option>
        <option value="clumber">Clumber, Clumber Spaniel</option>
        <option value="english springer">English Springer, English Springer Spaniel</option>
        <option value="welsh springer spaniel">Welsh Springer Spaniel</option>
        <option value="cocker spaniel">Cocker Spaniel, English Cocker Spaniel, Cocker</option>
        <option value="sussex spaniel">Sussex Spaniel</option>
        <option value="irish water spaniel">Irish Water Spaniel</option>
        <option value="kuvasz">Kuvasz</option>
        <option value="schipperke">Schipperke</option>
        <option value="groenendael">Groenendael</option>
        <option value="malinois">Malinois</option>
        <option value="briard">Briard</option>
        <option value="kelpie">Kelpie</option>
        <option value="komondor">Komondor</option>
        <option value="old english sheepdog">Old English Sheepdog, Bobtail</option>
        <option value="shetland sheepdog">Shetland Sheepdog, Shetland Sheep Dog, Shetland</option>
        <option value="collie">Collie</option>
        <option value="border collie">Border Collie</option>
        <option value="bouvier des flandres">Bouvier des Flandres, Bouviers des Flandres</option>
        <option value="rottweiler">Rottweiler</option>
        <option value="german shepherd">German Shepherd, German Shepherd Dog, German Police Dog, Alsatian</option>
        <option value="doberman">Doberman, Doberman Pinscher</option>
        <option value="miniature pinscher">Miniature Pinscher</option>
        <option value="greater swiss mountain dog">Greater Swiss Mountain Dog</option>
        <option value="bernese mountain dog">Bernese Mountain Dog</option>
        <option value="appenzeller">Appenzeller</option>
        <option value="entlebucher">Entlebucher</option>
        <option value="boxer">Boxer</option>
        <option value="bull mastiff">Bull Mastiff</option>
        <option value="tibetan mastiff">Tibetan Mastiff</option>
        <option value="french bulldog">French Bulldog</option>
        <option value="great dane">Great Dane</option>
        <option value="saint bernard">Saint Bernard, St Bernard</option>
        <option value="eskimo dog">Eskimo Dog, Husky</option>
        <option value="malamute">Malamute, Malemute, Alaskan Malamute</option>
        <option value="siberian husky">Siberian Husky</option>
        <option value="dalmatian">Dalmatian, Coach Dog, Carriage Dog</option>
        <option value="affenpinscher">Affenpinscher, Monkey Pinscher, Monkey Dog</option>
        <option value="basenji">Basenji</option>
        <option value="pug">Pug, Pug-Dog</option>
        <option value="leonberg">Leonberg</option>
        <option value="newfoundland">Newfoundland, Newfoundland Dog</option>
        <option value="great pyrenees">Great Pyrenees</option>
        <option value="samoyed">Samoyed, Samoyede</option>
        <option value="pomeranian">Pomeranian</option>
        <option value="chow">Chow, Chow Chow</option>
        <option value="keeshond">Keeshond</option>
        <option value="brabancon griffon">Brabancon Griffon</option>
        <option value="pembroke">Pembroke, Pembroke Welsh Corgi, Corgi</option>
        <option value="cardigan">Cardigan, Cardigan Welsh Corgi, Corgi</option>
        <option value="toy poodle">Toy Poodle</option>
        <option value="miniature poodle">Miniature Poodle</option>
        <option value="standard poodle">Standard Poodle, Poodle</option>
        <option value="mexican hairless">Mexican Hairless</option>
        <option value="affenpinscher">Affenpinscher</option>
        <option value="afghan hound">Afghan Hound</option>
        <option value="airedale terrier">Airedale Terrier</option>
        <option value="akita">Akita</option>
        <option value="alaskan malamute">Alaskan Malamute</option>
        <option value="american eskimo dog">American Eskimo Dog</option>
        <option value="american foxhound">American Foxhound</option>
        <option value="american staffordshire terrier">American Staffordshire Terrier</option>
        <option value="american water spaniel">American Water Spaniel</option>
        <option value="anatolian shepherd dog">Anatolian Shepherd Dog</option>
        <option value="australian cattle dog">Australian Cattle Dog</option>
        <option value="australian shepherd">Australian Shepherd</option>
        <option value="basset hound">Basset Hound</option>
        <option value="bearded collie">Bearded Collie</option>
        <option value="beauceron">Beauceron</option>
        <option value="belgian malinois">Belgian Malinois</option>
        <option value="belgian sheepdog">Belgian Sheepdog</option>
        <option value="belgian tervuren">Belgian Tervuren</option>
        <option value="bichon frise">Bichon Frise</option>
        <option value="black and tan coonhound">Black and Tan Coonhound</option>
        <option value="black russian terrier">Black Russian Terrier</option>
        <option value="bloodhound">Bloodhound</option>
        <option value="bluetick coonhound">Bluetick Coonhound</option>
        <option value="borzoi">Borzoi</option>
        <option value="boston terrier">Boston Terrier</option>
        <option value="bouvier des flandres">Bouvier des Flandres</option>
        <option value="boykin spaniel">Boykin Spaniel</option>
        <option value="brittany">Brittany</option>
        <option value="brussels griffon">Brussels Griffon</option>
        <option value="bull terrier">Bull Terrier</option>
        <option value="bulldog">Bulldog</option>
        <option value="bullmastiff">Bullmastiff</option>
        <option value="cairn terrier">Cairn Terrier</option>
        <option value="canaan dog">Canaan Dog</option>
        <option value="cane corso">Cane Corso</option>
        <option value="cardigan welsh corgi">Cardigan Welsh Corgi</option>
        <optgroup label="Cat Breeds">
        <option value="abyssinian">Abyssinian</option>
        <option value="aegean">Aegean</option>
        <option value="american curl">American Curl</option>
        <option value="american bobtail">American Bobtail</option>
        <option value="american shorthair">American Shorthair</option>
        <option value="american wirehair">American Wirehair</option>
        <option value="arabian mau">Arabian Mau</option>
        <option value="australian mist">Australian Mist</option>
        <option value="asian">Asian</option>
        <option value="asian semi longhair">Asian Semi-longhair</option>
        <option value="balines">Balines</option>
        <option value="bambino">Bambino</option>
        <option value="bengal">Bengal</option>
        <option value="birman">Birman</option>
        <option value="bombay">Bombay</option>
        <option value="brazilian shorthair">Brazilian Shorthair</option>
        <option value="british semi longhair">British Semi-longhair</option>
        <option value="british longhair">British Longhair</option>
        <option value="british shorthair">British Shorthair</option>
        <option value="burmese">Burmese</option>
        <option value="burmilla">Burmilla</option>
        <option value="california spangle">California Spangle</option>
        <option value="chantilly tiffan">Chantilly-Tiffan</option>
        <option value="chartreux">Chartreux</option>
        <option value="chausie">Chausie</option>
        <option value="cheetoh">Cheetoh</option>
        <option value="colorpoint shorthair">Colorpoint Shorthair</option>
        <option value="cornish rex">Cornish Rex</option>
        <option value="cymric">Cymric, or Manx Longhair</option>
        <option value="cyprus">Cyprus</option>
        <option value="devon rex">Devon Rex</option>
        <option value="donskoy">Donskoy, or Don Sphynx</option>
        <option value="dragon li">Dragon Li</option>
        <option value="dwarf cat">Dwarf cat, or Dwelf</option>
        <option value="egyptian mau">Egyptian Mau</option>
        <option value="european shorthair">European Shorthair</option>
        <option value="exotic shorthair">Exotic Shorthair</option>
        <option value="foldex">Foldex</option>
        <option value="german rex">German Rex</option>
        <option value="havana brown">Havana Brown</option>
        <option value="highlander">Highlander</option>
        <option value="himalayan">Himalayan, or Colorpoint Persian</option>
        <option value="japanese bobtail">Japanese Bobtail</option>
        <option value="javanese">Javanese</option>
        <option value="karelian bobtail">Karelian Bobtail</option> <option value="khao manee">Khao Manee</option>
        <option value="korat">Korat Thailand</option>
        <option value="korean bobtail">Korean Bobtail</option>
        <option value="korn ja">Korn Ja</option>
        <option value="kurilian bobtail">Kurilian Bobtail</option>
        <option value="laperm">LaPerm</option>
        <option value="lykoi">Lykoi</option>
        <option value="maine coon">Maine Coon</option>
        <option value="manx">Manx</option>
        <option value="mekong bobtail">Mekong Bobtail</option>
        <option value="minskin">Minskin</option>
        <option value="munchkin">Munchkin</option>
        <option value="nebelung">Nebelung</option>
        <option value="napoleon">Napoleon</option>
        <option value="norwegian forest cat">Norwegian Forest Cat</option>
        <option value="ocicat">Ocicat</option>
        <option value="ojos azules">Ojos Azules</option>
        <option value="oregon rex">Oregon Rex</option>
        <option value="oriental bicolor">Oriental Bicolor</option>
        <option value="oriental shorthair">Oriental Shorthair</option>
        <option value="oriental longhair">Oriental Longhair</option>
        <option value="perfold">PerFold</option>
        <option value="persian modern persian cat">Persian (Modern Persian Cat)</option>
        <option value="persian traditional persian cat">Persian (Traditional Persian Cat)</option>
        <option value="peterbald">Peterbald</option>
        <option value="pixie bob">Pixie-bob</option>
        <option value="raas">Raas</option>
        <option value="ragamuffin">Ragamuffin</option>
        <option value="ragdoll">Ragdoll</option>
        <option value="russian blue">Russian Blue</option>
        <option value="russian white black and tabby">Russian White, Black and Tabby</option>
        <option value="sam sawe">Sam Sawe</option>
        <option value="savannah">Savannah</option>
        <option value="scottish fold">Scottish Fold</option>
        <option value="selkirk rex">Selkirk Rex</option>
        <option value="serengeti">Serengeti</option>
        <option value="serrade petit">Serrade petit</option>
        <option value="siamese">Siamese</option>
        <option value="siberian">Siberian</option>
        <option value="singapura">Singapura</option>
        <option value="snowshoe">Snowshoe</option>
        <option value="sokoke">Sokoke</option>
        <option value="somali">Somali</option>
        <option value="sphynx">Sphynx</option>
        <option value="suphalak">Suphalak</option>
        <option value="thai">Thai</option>
        <option value="thai lilac">Thai Lilac</option>
        <option value="tonkinese">Tonkinese</option>
        <option value="toyger">Toyger</option>
        <option value="turkish angora">Turkish Angora</option>
        <option value="turkish van">Turkish Van</option>
        <option value="ukrainian levkoy">Ukrainian Levkoy</option>
        <option value="york chocolate">York Chocolate</option>
      </optgroup>
    </select><br><br>
    <label for="fur_color">Fur Color:</label>
    <select id="fur_color" name="fur_color">
      <option value="white">White</option>
      <option value="cream">Cream</option>
      <option value="golden">Golden</option>
      <option value="orange">Orange</option>
      <option value="light brown">Light Brown</option>
      <option value="medium brown">Medium Brown</option>
      <option value="dark brown">Dark Brown</option>
      <option value="black">Black</option>
      <option value="light gray">Light Gray</option>
      <option value="dark gray">Dark Gray</option>
      <option value="blue">Blue</option>
      <option value="none">None</option>
    </select><br><br>

    <label for="fur_pattern">Fur Pattern:</label>
    <select id="fur_pattern" name="fur_pattern">
      <option value="patches">Patches</option>
      <option value="speckled">Speckled</option>
      <option value="spotted">Spotted</option>
      <option value="striped">Striped</option>
      <option value="tabby">Tabby</option>
      <option value="tortoiseshell">Tortoiseshell</option>
      <option value="calico">Calico</option>
      <option value="bi-color">Bi-color</option>
      <option value="color point">Color Point</option>
      <option value="solid color">Solid Color</option>
    </select><br><br>

    <label for="eye_color">Eye Color:</label>
    <select id="eye_color" name="eye_color">
      <option value="blue">Blue</option>
      <option value="brown">Brown</option>
      <option value="black">Black</option>
      <option value="gray">Gray</option>
      <option value="green">Green</option>
      <option value="yellow">Yellow</option>
      <option value="orange">Orange</option>
      <option value="red">Red</option>
      <option value="heterochromia">Heterochromia</option>
      <option value="light">Light</option>
      <option value="dark">Dark</option>
    </select><br><br>

    <label for="pet_size">Size:</label>
    <select id="pet_size" name="pet_size">
      <option value="very small">Very Small (&lt;10 lbs)</option>
      <option value="small">Small (10-25 lbs)</option>
      <option value="medium">Medium (26-50 lbs)</option>
      <option value="large">Large (51-100 lbs)</option>
      <option value="very large">Very Large (&gt;100 lbs)</option>
    </select><br><br>

    <label for="pet_condition">Condition:</label>
    <select id="pet_condition" name="pet_condition">
    <option value="Malnourished">Malnourished</option>
    <option value="Sick">Sick</option>
    <option value="Injured">Injured</option>
    <option value="Tired">Tired</option>
    <option value="Healthy">Healthy</option>
    <option value="Unknown">Unknown</option>
    </select><br><br>

    <label for="additional_description">Additional Description:</label><br>
    <textarea id="additional_description" name="additional_description" rows="4" cols="50"></textarea><br><br>

    <div id="location">
    <h4>Location</h4>
    <label for="street_name">Street Name:</label>
    <input type="text" id="street_name" name="street_name">
    <br><br>

    <label for="zip_code">Zip Code:</label>
    <input type="text" id="zip_code" name="zip_code">
    <br><br>

    <label for="city">City:</label>
    <input type="text" id="city" name="city">
    <br><br>

    <label for="description">Further Details:</label><br>
    <textarea id="description" name="description" rows="4" cols="50"></textarea><br><br>
    
    <input type="submit" value="Submit" id="reportsightingBtn" name="reportsightingBtn" class="btn btn-dark">
</div>

  </form>
</body>
</html>