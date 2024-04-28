<?php 
require("connect-db.php");    // include("connect-db.php");
require("addpet-db.php");
?>


<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST')   // GET
{
  if (!empty($_POST['addPetBtn']))    // $_GET['....']
  {
      addPet($_POST['species'], $_POST['breed'], $_POST['fur_color'], $_POST['fur_pattern'], $_POST['eye_color'], $_POST['pet_size'], $_POST['additional_description'], $_POST['nickname']);
  }
}
  ?>




<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">    
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Register your pet">
  <meta name="keywords" content="Pet Finder, register pet">
  
  <title>Register Pet</title>
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

  <form method="post" action="addpet.php">
    <label for="nickname">Nickname:</label>
        <input type="text" id="nickname" name="nickname"><br><br>

    <label for="species">Species:</label>
    <select id="species" name="species">
      <option value="Dog">Dog</option>
      <option value="Cat">Cat</option>
    </select><br><br>
    <label for="breed">Breed:</label>
    <select id="breed" name="breed">
      <optgroup label="Dog Breeds">
        <option value="Chihuahua">Chihuahua</option>
        <option value="Japanese Spaniel">Japanese Spaniel</option>
        <option value="Maltese Dog">Maltese Dog, Maltese Terrier, Maltese</option>
        <option value="Pekinese">Pekinese, Pekingese, Peke</option>
        <option value="Shih-Tzu">Shih-Tzu</option>
        <option value="Blenheim Spaniel">Blenheim Spaniel</option>
        <option value="Papillon">Papillon</option>
        <option value="Toy Terrier">Toy Terrier</option>
        <option value="Rhodesian Ridgeback">Rhodesian Ridgeback</option>
        <option value="Afghan Hound">Afghan Hound, Afghan</option>
        <option value="Basset Hound">Basset, Basset Hound</option>
        <option value="Beagle">Beagle</option>
        <option value="Bloodhound">Bloodhound, Sleuthhound</option>
        <option value="Bluetick">Bluetick</option>
        <option value="Black and Tan Coonhound">Black-and-Tan Coonhound</option>
        <option value="Walker Hound">Walker Hound, Walker Foxhound</option>
        <option value="English Foxhound">English Foxhound</option>
        <option value="Redbone">Redbone</option>
        <option value="Borzoi">Borzoi, Russian Wolfhound</option>
        <option value="Irish Wolfhound">Irish Wolfhound</option>
        <option value="Italian Greyhound">Italian Greyhound</option>
        <option value="Whippet">Whippet</option>
        <option value="Ibizan Hound">Ibizan Hound, Ibizan Podenco</option>
        <option value="Norwegian Elkhound">Norwegian Elkhound, Elkhound</option>
        <option value="Otterhound">Otterhound, Otter Hound</option>
        <option value="Saluki">Saluki, Gazelle Hound</option>
        <option value="Scottish Deerhound">Scottish Deerhound, Deerhound</option>
        <option value="Weimaraner">Weimaraner</option>
        <option value="Staffordshire Bullterrier">Staffordshire Bullterrier, Staffordshire Bull Terrier</option>
        <option value="American Staffordshire Terrier">American Staffordshire Terrier, Staffordshire Terrier, American Pit Bull Terrier, Pit Bull Terrier</option>
        <option value="Bedlington Terrier">Bedlington Terrier</option>
        <option value="Border Terrier">Border Terrier</option>
        <option value="Kerry Blue Terrier">Kerry Blue Terrier</option>
        <option value="Irish Terrier">Irish Terrier</option>
        <option value="Norfolk Terrier">Norfolk Terrier</option>
        <option value="Norwich Terrier">Norwich Terrier</option>
        <option value="Yorkshire Terrier">Yorkshire Terrier</option>
        <option value="Wire Haired Fox Terrier">Wire-Haired Fox Terrier</option>
        <option value="Lakeland Terrier">Lakeland Terrier</option>
        <option value="Sealyham Terrier">Sealyham Terrier, Sealyham</option>
        <option value="Airedale">Airedale, Airedale Terrier</option>
        <option value="Cairn">Cairn, Cairn Terrier</option>
        <option value="Australian Terrier">Australian Terrier</option>
        <option value="Dandie Dinmont">Dandie Dinmont, Dandie Dinmont Terrier</option>
        <option value="Boston Bull">Boston Bull, Boston Terrier</option>
        <option value="Miniature Schnauzer">Miniature Schnauzer</option>
        <option value="Giant Schnauzer">Giant Schnauzer</option>
        <option value="Standard Schnauzer">Standard Schnauzer, Schnauzer</option>
        <option value="Scotch Terrier">Scotch Terrier, Scottish Terrier, Scottie</option>
        <option value="Tibetan Terrier">Tibetan Terrier, Chrysanthemum Dog</option>
        <option value="Silky Terrier">Silky Terrier, Sydney Silky</option>
        <option value="Soft Coated Wheaten Terrier">Soft-Coated Wheaten Terrier</option>
        <option value="West Highland White Terrier">West Highland White Terrier</option>
        <option value="Lhasa">Lhasa, Lhasa Apso</option>
        <option value="Flat Coated Retriever">Flat-Coated Retriever</option>
        <option value="Curly Coated Retriever">Curly-Coated Retriever</option>
        <option value="Golden Retriever">Golden Retriever</option>
        <option value="Labrador Retriever">Labrador Retriever</option>
        <option value="Chesapeake Bay Retriever">Chesapeake Bay Retriever</option>
        <option value="German Shorthaired Pointer">German Shorthaired Pointer</option>
        <option value="Vizsla">Vizsla, Hungarian Pointer</option>
        <option value="English Setter">English Setter</option>
        <option value="Irish Setter">Irish Setter, Red Setter</option>
        <option value="Gordon Setter">Gordon Setter</option>
        <option value="Brittany Spaniel">Brittany Spaniel</option>
        <option value="Clumber">Clumber, Clumber Spaniel</option>
        <option value="English Springer">English Springer, English Springer Spaniel</option>
        <option value="Welsh Springer Spaniel">Welsh Springer Spaniel</option>
        <option value="Cocker Spaniel">Cocker Spaniel, English Cocker Spaniel, Cocker</option>
        <option value="Sussex Spaniel">Sussex Spaniel</option>
        <option value="Irish Water Spaniel">Irish Water Spaniel</option>
        <option value="Kuvasz">Kuvasz</option>
        <option value="Schipperke">Schipperke</option>
        <option value="Groenendael">Groenendael</option>
        <option value="Malinois">Malinois</option>
        <option value="Briard">Briard</option>
        <option value="Kelpie">Kelpie</option>
        <option value="Komondor">Komondor</option>
        <option value="Old English Sheepdog">Old English Sheepdog, Bobtail</option>
        <option value="Shetland Sheepdog">Shetland Sheepdog, Shetland Sheep Dog, Shetland</option>
        <option value="Collie">Collie</option>
        <option value="Border Collie">Border Collie</option>
        <option value="Bouvier des Flandres">Bouvier des Flandres, Bouviers des Flandres</option>
        <option value="Rottweiler">Rottweiler</option>
        <option value="German Shepherd">German Shepherd, German Shepherd Dog, German Police Dog, Alsatian</option>
        <option value="Doberman">Doberman, Doberman Pinscher</option>
        <option value="Miniature Pinscher">Miniature Pinscher</option>
        <option value="Greater Swiss Mountain Dog">Greater Swiss Mountain Dog</option>
        <option value="Bernese Mountain Dog">Bernese Mountain Dog</option>
        <option value="Appenzeller">Appenzeller</option>
        <option value="Entlebucher">Entlebucher</option>
        <option value="Boxer">Boxer</option>
        <option value="Bull Mastiff">Bull Mastiff</option>
        <option value="Tibetan Mastiff">Tibetan Mastiff</option>
        <option value="French Bulldog">French Bulldog</option>
        <option value="Great Dane">Great Dane</option>
        <option value="Saint Bernard">Saint Bernard, St Bernard</option>
        <option value="Eskimo Dog">Eskimo Dog, Husky</option>
        <option value="Malamute">Malamute, Malemute, Alaskan Malamute</option>
        <option value="Siberian Husky">Siberian Husky</option>
        <option value="Dalmatian">Dalmatian, Coach Dog, Carriage Dog</option>
        <option value="Affenpinscher">Affenpinscher, Monkey Pinscher, Monkey Dog</option>
        <option value="Basenji">Basenji</option>
        <option value="Pug">Pug, Pug-Dog</option>
        <option value="Leonberg">Leonberg</option>
        <option value="Newfoundland">Newfoundland, Newfoundland Dog</option>
        <option value="Great Pyrenees">Great Pyrenees</option>
        <option value="Samoyed">Samoyed, Samoyede</option>
        <option value="Pomeranian">Pomeranian</option>
        <option value="Chow">Chow, Chow Chow</option>
        <option value="Keeshond">Keeshond</option>
        <option value="Brabancon Griffon">Brabancon Griffon</option>
        <option value="Pembroke">Pembroke, Pembroke Welsh Corgi, Corgi</option>
        <option value="Cardigan">Cardigan, Cardigan Welsh Corgi, Corgi</option>
        <option value="Toy Poodle">Toy Poodle</option>
        <option value="Miniature Poodle">Miniature Poodle</option>
        <option value="Standard Poodle">Standard Poodle, Poodle</option>
        <option value="Mexican Hairless">Mexican Hairless</option>
        <option value="Affenpinscher">Affenpinscher</option>
        <option value="Afghan Hound">Afghan Hound</option>
        <option value="Airedale Terrier">Airedale Terrier</option>
        <option value="Akita">Akita</option>
        <option value="Alaskan Malamute">Alaskan Malamute</option>
        <option value="American Eskimo Dog">American Eskimo Dog</option>
        <option value="American Foxhound">American Foxhound</option>
        <option value="American Staffordshire Terrier">American Staffordshire Terrier</option>
        <option value="American Water Spaniel">American Water Spaniel</option>
        <option value="Anatolian Shepherd Dog">Anatolian Shepherd Dog</option>
        <option value="Australian Cattle Dog">Australian Cattle Dog</option>
        <option value="Australian Shepherd">Australian Shepherd</option>
        <option value="Basset Hound">Basset Hound</option>
        <option value="Bearded Collie">Bearded Collie</option>
        <option value="Beauceron">Beauceron</option>
        <option value="Belgian Malinois">Belgian Malinois</option>
        <option value="Belgian Sheepdog">Belgian Sheepdog</option>
        <option value="Belgian Tervuren">Belgian Tervuren</option>
        <option value="Bichon Frise">Bichon Frise</option>
        <option value="Black and Tan Coonhound">Black and Tan Coonhound</option>
        <option value="Black Russian Terrier">Black Russian Terrier</option>
        <option value="Bloodhound">Bloodhound</option>
        <option value="Bluetick Coonhound">Bluetick Coonhound</option>
        <option value="Borzoi">Borzoi</option>
        <option value="Boston Terrier">Boston Terrier</option>
        <option value="Bouvier des Flandres">Bouvier des Flandres</option>
        <option value="Boykin Spaniel">Boykin Spaniel</option>
        <option value="Brittany">Brittany</option>
        <option value="Brussels Griffon">Brussels Griffon</option>
        <option value="Bull Terrier">Bull Terrier</option>
        <option value="Bulldog">Bulldog</option>
        <option value="Bullmastiff">Bullmastiff</option>
        <option value="Cairn Terrier">Cairn Terrier</option>
        <option value="Canaan Dog">Canaan Dog</option>
        <option value="Cane Corso">Cane Corso</option>
        <option value="Cardigan Welsh Corgi">Cardigan Welsh Corgi</option>
      <optgroup label="Cat Breeds">
        <option value="Abyssinian">Abyssinian</option>
        <option value="Aegean">Aegean</option>
        <option value="American Curl">American Curl</option>
        <option value="American Bobtail">American Bobtail</option>
        <option value="American Shorthair">American Shorthair</option>
        <option value="American Wirehair">American Wirehair</option>
        <option value="Arabian Mau">Arabian Mau</option>
        <option value="Australian Mist">Australian Mist</option>
        <option value="Asian">Asian</option>
        <option value="Asian Semi-longhair">Asian Semi-longhair</option>
        <option value="Balines">Balines</option>
        <option value="Bambino">Bambino</option>
        <option value="Bengal">Bengal</option>
        <option value="Birman">Birman</option>
        <option value="Bombay">Bombay</option>
        <option value="Brazilian Shorthair">Brazilian Shorthair</option>
        <option value="British Semi-longhair">British Semi-longhair</option>
        <option value="British Longhair">British Longhair</option>
        <option value="British Shorthair">British Shorthair</option>
        <option value="Burmese">Burmese</option>
        <option value="Burmilla">Burmilla</option>
        <option value="California Spangle">California Spangle</option>
        <option value="Chantilly-Tiffan">Chantilly-Tiffan</option>
        <option value="Chartreux">Chartreux</option>
        <option value="Chausie">Chausie</option>
        <option value="Cheetoh">Cheetoh</option>
        <option value="Colorpoint Shorthair">Colorpoint Shorthair</option>
        <option value="Cornish Rex">Cornish Rex</option>
        <option value="Cymric, or Manx Longhair">Cymric</option>
        <option value="Cyprus">Cyprus</option>
        <option value="Devon Rex">Devon Rex</option>
        <option value="Domestic Shorthair">Domestic Shorthair</option>
        <option value="Donskoy, or Don Sphynx">Donskoy</option>
        <option value="Dragon Li">Dragon Li</option>
        <option value="Dwarf cat, or Dwelf">Dwarf cat</option>
        <option value="Egyptian Mau">Egyptian Mau</option>
        <option value="European Shorthair">European Shorthair</option>
        <option value="Exotic Shorthair">Exotic Shorthair</option>
        <option value="Foldex">Foldex</option>
        <option value="German Rex">German Rex</option>
        <option value="Havana Brown">Havana Brown</option>
        <option value="Highlander">Highlander</option>
        <option value="Himalayan, or Colorpoint Persian">Himalayan</option>
        <option value="Japanese Bobtail">Japanese Bobtail</option>
        <option value="Javanese">Javanese</option>
        <option value="Karelian Bobtail">Karelian Bobtail</option>
        <option value="Khao Manee">Khao Manee</option>
        <option value="Korat Thailand">Korat</option>
        <option value="Korean Bobtail">Korean Bobtail</option>
        <option value="Korn Ja">Korn Ja</option>
        <option value="Kurilian Bobtail">Kurilian Bobtail</option>
        <option value="LaPerm">LaPerm</option>
        <option value="Lykoi">Lykoi</option>
        <option value="Maine Coon">Maine Coon</option>
        <option value="Manx">Manx</option>
        <option value="Mekong Bobtail">Mekong Bobtail</option>
        <option value="Minskin">Minskin</option>
        <option value="Munchkin">Munchkin</option>
        <option value="Nebelung">Nebelung</option>
        <option value="Napoleon">Napoleon</option>
        <option value="Norwegian Forest Cat">Norwegian Forest Cat</option>
        <option value="Ocicat">Ocicat</option>
        <option value="Ojos Azules">Ojos Azules</option>
        <option value="Oregon Rex">Oregon Rex</option>
        <option value="Oriental Bicolor">Oriental Bicolor</option>
        <option value="Oriental Shorthair">Oriental Shorthair</option>
        <option value="Oriental Longhair">Oriental Longhair</option>
        <option value="PerFold">PerFold</option>
        <option value="Persian (Modern Persian Cat)">Persian (Modern Persian Cat)</option>
        <option value="Persian (Traditional Persian Cat)">Persian (Traditional Persian Cat)</option>
        <option value="Peterbald">Peterbald</option>
        <option value="Pixie-bob">Pixie-bob</option>
        <option value="Raas">Raas</option>
        <option value="Ragamuffin">Ragamuffin</option>
        <option value="Ragdoll">Ragdoll</option>
        <option value="Russian Blue">Russian Blue</option>
        <option value="Russian White, Black and Tabby">Russian White, Black and Tabby</option>
        <option value="Sam Sawe">Sam Sawe</option>
        <option value="Savannah">Savannah</option>
        <option value="Scottish Fold">Scottish Fold</option>
        <option value="Selkirk Rex">Selkirk Rex</option>
        <option value="Serengeti">Serengeti</option>
        <option value="Serrade petit">Serrade petit</option>
        <option value="Siamese">Siamese</option>
        <option value="Siberian">Siberian</option>
        <option value="Singapura">Singapura</option>
        <option value="Snowshoe">Snowshoe</option>
        <option value="Sokoke">Sokoke</option>
        <option value="Somali">Somali</option>
        <option value="Sphynx">Sphynx</option>
        <option value="Suphalak">Suphalak</option>
        <option value="Thai">Thai</option>
        <option value="Thai Lilac">Thai Lilac</option>
        <option value="Tonkinese">Tonkinese</option>
        <option value="Toyger">Toyger</option>
        <option value="Turkish Angora">Turkish Angora</option>
        <option value="Turkish Van">Turkish Van</option>
        <option value="Ukrainian Levkoy">Ukrainian Levkoy</option>
        <option value="York Chocolate">York Chocolate</option>
      </optgroup>
    </select><br><br>

    <label for="fur_color">Fur Color:</label>
    <select id="fur_color" name="fur_color">
      <option value="White">White</option>
      <option value="Cream">Cream</option>
      <option value="Golden">Golden</option>
      <option value="Orange">Orange</option>
      <option value="Light Brown">Light Brown</option>
      <option value="Medium Brown">Medium Brown</option>
      <option value="Dark Brown">Dark Brown</option>
      <option value="Black">Black</option>
      <option value="Light Gray">Light Gray</option>
      <option value="Dark Gray">Dark Gray</option>
      <option value="Blue">Blue</option>
      <option value="None">None</option>
    </select><br><br>

    <label for="fur_pattern">Fur Pattern:</label>
    <select id="fur_pattern" name="fur_pattern">
      <option value="Patches">Patches</option>
      <option value="Speckled">Speckled</option>
      <option value="Spotted">Spotted</option>
      <option value="Striped">Striped</option>
      <option value="Tabby">Tabby</option>
      <option value="Tortoiseshell">Tortoiseshell</option>
      <option value="Calico">Calico</option>
      <option value="Bi-color">Bi-color</option>
      <option value="Color Point">Color Point</option>
      <option value="Solid Color">Solid Color</option>
    </select><br><br>

    <label for="eye_color">Eye Color:</label>
    <select id="eye_color" name="eye_color">
      <option value="Blue">Blue</option>
      <option value="Brown">Brown</option>
      <option value="Black">Black</option>
      <option value="Gray">Gray</option>
      <option value="Green">Green</option>
      <option value="Yellow">Yellow</option>
      <option value="Orange">Orange</option>
      <option value="Red">Red</option>
      <option value="Heterochromia">Heterochromia</option>
      <option value="Light">Light</option>
      <option value="Dark">Dark</option>
    </select><br><br>

    <label for="pet_size">Size:</label>
    <select id="pet_size" name="pet_size">
      <option value="Very Small">Very Small (&lt;10 lbs)</option>
      <option value="Small">Small (10-25 lbs)</option>
      <option value="Medium">Medium (26-50 lbs)</option>
      <option value="Large">Large (51-100 lbs)</option>
      <option value="Very Large">Very Large (&gt;100 lbs)</option>
    </select><br><br>

    <label for="additional_description">Additional Description:</label><br>
    <textarea id="additional_description" name="additional_description" rows="4" cols="50"></textarea><br><br>

    <input type="submit" value="Submit" id="addPetBtn" name="addPetBtn" class="btn btn-dark">
  </form>
</body>
</html>