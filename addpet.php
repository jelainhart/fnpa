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

  <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
    <label for="nickname">Nickname:</label>
        <input type="text" id="nickname" name="nickname"><br><br>

    <label for="species">Species:</label>
    <select id="species" name="species">
      <option value="dog">Dog</option>
      <option value="cat">Cat</option>
    </select><br><br>
    <label for="breed">Breed:</label>
    <select id="breed" name="breed">
      <optgroup label="Dog Breeds">
        <option value="chihuahua">Chihuahua</option>
        <option value="japanese_spaniel">Japanese Spaniel</option>
        <option value="maltese_dog">Maltese Dog, Maltese Terrier, Maltese</option>
        <option value="pekinese">Pekinese, Pekingese, Peke</option>
        <option value="shih_tzu">Shih-Tzu</option>
        <option value="blenheim_spaniel">Blenheim Spaniel</option>
        <option value="papillon">Papillon</option>
        <option value="toy_terrier">Toy Terrier</option>
        <option value="rhodesian_ridgeback">Rhodesian Ridgeback</option>
        <option value="afghan_hound">Afghan Hound, Afghan</option>
        <option value="basset_hound">Basset, Basset Hound</option>
        <option value="beagle">Beagle</option>
        <option value="bloodhound">Bloodhound, Sleuthhound</option>
        <option value="bluetick">Bluetick</option>
        <option value="black_and_tan_coonhound">Black-and-Tan Coonhound</option>
        <option value="walker_hound">Walker Hound, Walker Foxhound</option>
        <option value="english_foxhound">English Foxhound</option>
        <option value="redbone">Redbone</option>
        <option value="borzoi">Borzoi, Russian Wolfhound</option>
        <option value="irish_wolfhound">Irish Wolfhound</option>
        <option value="italian_greyhound">Italian Greyhound</option>
        <option value="whippet">Whippet</option>
        <option value="ibizan_hound">Ibizan Hound, Ibizan Podenco</option>
        <option value="norwegian_elkhound">Norwegian Elkhound, Elkhound</option>
        <option value="otterhound">Otterhound, Otter Hound</option>
        <option value="saluki">Saluki, Gazelle Hound</option>
        <option value="scottish_deerhound">Scottish Deerhound, Deerhound</option>
        <option value="weimaraner">Weimaraner</option>
        <option value="staffordshire_bullterrier">Staffordshire Bullterrier, Staffordshire Bull Terrier</option>
        <option value="american_staffordshire_terrier">American Staffordshire Terrier, Staffordshire Terrier, American Pit Bull Terrier, Pit Bull Terrier</option>
        <option value="bedlington_terrier">Bedlington Terrier</option>
        <option value="border_terrier">Border Terrier</option>
        <option value="kerry_blue_terrier">Kerry Blue Terrier</option>
        <option value="irish_terrier">Irish Terrier</option>
        <option value="norfolk_terrier">Norfolk Terrier</option>
        <option value="norwich_terrier">Norwich Terrier</option>
        <option value="yorkshire_terrier">Yorkshire Terrier</option>
        <option value="wire_haired_fox_terrier">Wire-Haired Fox Terrier</option>
        <option value="lakeland_terrier">Lakeland Terrier</option>
        <option value="sealyham_terrier">Sealyham Terrier, Sealyham</option>
        <option value="airedale">Airedale, Airedale Terrier</option>
        <option value="cairn">Cairn, Cairn Terrier</option>
        <option value="australian_terrier">Australian Terrier</option>
        <option value="dandie_dinmont">Dandie Dinmont, Dandie Dinmont Terrier</option>
        <option value="boston_bull">Boston Bull, Boston Terrier</option>
        <option value="miniature_schnauzer">Miniature Schnauzer</option>
        <option value="giant_schnauzer">Giant Schnauzer</option>
        <option value="standard_schnauzer">Standard Schnauzer, Schnauzer</option>
        <option value="scotch_terrier">Scotch Terrier, Scottish Terrier, Scottie</option>
        <option value="tibetan_terrier">Tibetan Terrier, Chrysanthemum Dog</option>
        <option value="silky_terrier">Silky Terrier, Sydney Silky</option>
        <option value="soft_coated_wheaten_terrier">Soft-Coated Wheaten Terrier</option>
        <option value="west_highland_white_terrier">West Highland White Terrier</option>
        <option value="lhasa">Lhasa, Lhasa Apso</option>
        <option value="flat_coated_retriever">Flat-Coated Retriever</option>
        <option value="curly_coated_retriever">Curly-Coated Retriever</option>
        <option value="golden_retriever">Golden Retriever</option>
        <option value="labrador_retriever">Labrador Retriever</option>
        <option value="chesapeake_bay_retriever">Chesapeake Bay Retriever</option>
        <option value="german_shorthaired_pointer">German Shorthaired Pointer</option>
        <option value="vizsla">Vizsla, Hungarian Pointer</option>
        <option value="english_setter">English Setter</option>
        <option value="irish_setter">Irish Setter, Red Setter</option>
        <option value="gordon_setter">Gordon Setter</option>
        <option value="brittany_spaniel">Brittany Spaniel</option>
        <option value="clumber">Clumber, Clumber Spaniel</option>
        <option value="english_springer">English Springer, English Springer Spaniel</option>
        <option value="welsh_springer_spaniel">Welsh Springer Spaniel</option>
        <option value="cocker_spaniel">Cocker Spaniel, English Cocker Spaniel, Cocker</option>
        <option value="sussex_spaniel">Sussex Spaniel</option>
        <option value="irish_water_spaniel">Irish Water Spaniel</option>
        <option value="kuvasz">Kuvasz</option>
        <option value="schipperke">Schipperke</option>
        <option value="groenendael">Groenendael</option>
        <option value="malinois">Malinois</option>
        <option value="briard">Briard</option>
        <option value="kelpie">Kelpie</option>
        <option value="komondor">Komondor</option>
        <option value="old_english_sheepdog">Old English Sheepdog, Bobtail</option>
        <option value="shetland_sheepdog">Shetland Sheepdog, Shetland Sheep Dog, Shetland</option>
        <option value="collie">Collie</option>
        <option value="border_collie">Border Collie</option>
        <option value="bouvier_des_flandres">Bouvier des Flandres, Bouviers des Flandres</option>
        <option value="rottweiler">Rottweiler</option>
        <option value="german_shepherd">German Shepherd, German Shepherd Dog, German Police Dog, Alsatian</option>
        <option value="doberman">Doberman, Doberman Pinscher</option>
        <option value="miniature_pinscher">Miniature Pinscher</option>
        <option value="greater_swiss_mountain_dog">Greater Swiss Mountain Dog</option>
        <option value="bernese_mountain_dog">Bernese Mountain Dog</option>
        <option value="appenzeller">Appenzeller</option>
        <option value="entlebucher">Entlebucher</option>
        <option value="boxer">Boxer</option>
        <option value="bull_mastiff">Bull Mastiff</option>
        <option value="tibetan_mastiff">Tibetan Mastiff</option>
        <option value="french_bulldog">French Bulldog</option>
        <option value="great_dane">Great Dane</option>
        <option value="saint_bernard">Saint Bernard, St Bernard</option>
        <option value="eskimo_dog">Eskimo Dog, Husky</option>
        <option value="malamute">Malamute, Malemute, Alaskan Malamute</option>
        <option value="siberian_husky">Siberian Husky</option>
        <option value="dalmatian">Dalmatian, Coach Dog, Carriage Dog</option>
        <option value="affenpinscher">Affenpinscher, Monkey Pinscher, Monkey Dog</option>
        <option value="basenji">Basenji</option>
        <option value="pug">Pug, Pug-Dog</option>
        <option value="leonberg">Leonberg</option>
        <option value="newfoundland">Newfoundland, Newfoundland Dog</option>
        <option value="great_pyrenees">Great Pyrenees</option>
        <option value="samoyed">Samoyed, Samoyede</option>
        <option value="pomeranian">Pomeranian</option>
        <option value="chow">Chow, Chow Chow</option>
        <option value="keeshond">Keeshond</option>
        <option value="brabancon_griffon">Brabancon Griffon</option>
        <option value="pembroke">Pembroke, Pembroke Welsh Corgi, Corgi</option>
        <option value="cardigan">Cardigan, Cardigan Welsh Corgi, Corgi</option>
        <option value="toy_poodle">Toy Poodle</option>
        <option value="miniature_poodle">Miniature Poodle</option>
        <option value="standard_poodle">Standard Poodle, Poodle</option>
        <option value="mexican_hairless">Mexican Hairless</option>
        <option value="affenpinscher">Affenpinscher</option>
        <option value="afghan_hound">Afghan Hound</option>
        <option value="airedale_terrier">Airedale Terrier</option>
        <option value="akita">Akita</option>
        <option value="alaskan_malamute">Alaskan Malamute</option>
        <option value="american_eskimo_dog">American Eskimo Dog</option>
        <option value="american_foxhound">American Foxhound</option>
        <option value="american_staffordshire_terrier">American Staffordshire Terrier</option>
        <option value="american_water_spaniel">American Water Spaniel</option>
        <option value="anatolian_shepherd_dog">Anatolian Shepherd Dog</option>
        <option value="australian_cattle_dog">Australian Cattle Dog</option>
        <option value="australian_shepherd">Australian Shepherd</option>
        <option value="basset_hound">Basset Hound</option>
        <option value="bearded_collie">Bearded Collie</option>
        <option value="beauceron">Beauceron</option>
        <option value="belgian_malinois">Belgian Malinois</option>
        <option value="belgian_sheepdog">Belgian Sheepdog</option>
        <option value="belgian_tervuren">Belgian Tervuren</option>
        <option value="bichon_frise">Bichon Frise</option>
        <option value="black_and_tan_coonhound">Black and Tan Coonhound</option>
        <option value="black_russian_terrier">Black Russian Terrier</option>
        <option value="bloodhound">Bloodhound</option>
        <option value="bluetick_coonhound">Bluetick Coonhound</option>
        <option value="borzoi">Borzoi</option>
        <option value="boston_terrier">Boston Terrier</option>
        <option value="bouvier_des_flandres">Bouvier des Flandres</option>
        <option value="boykin_spaniel">Boykin Spaniel</option>
        <option value="brittany">Brittany</option>
        <option value="brussels_griffon">Brussels Griffon</option>
        <option value="bull_terrier">Bull Terrier</option>
        <option value="bulldog">Bulldog</option>
        <option value="bullmastiff">Bullmastiff</option>
        <option value="cairn_terrier">Cairn Terrier</option>
        <option value="canaan_dog">Canaan Dog</option>
        <option value="cane_corso">Cane Corso</option>
        <option value="cardigan_welsh_corgi">Cardigan Welsh Corgi</option>
        <optgroup label="Cat Breeds">
        <option value="abyssinian">Abyssinian</option>
        <option value="aegean">Aegean</option>
        <option value="american_curl">American Curl</option>
        <option value="american_bobtail">American Bobtail</option>
        <option value="american_shorthair">American Shorthair</option>
        <option value="american_wirehair">American Wirehair</option>
        <option value="arabian_mau">Arabian Mau</option>
        <option value="australian_mist">Australian Mist</option>
        <option value="asian">Asian</option>
        <option value="asian_semi_longhair">Asian Semi-longhair</option>
        <option value="balines">Balines</option>
        <option value="bambino">Bambino</option>
        <option value="bengal">Bengal</option>
        <option value="birman">Birman</option>
        <option value="bombay">Bombay</option>
        <option value="brazilian_shorthair">Brazilian Shorthair</option>
        <option value="british_semi_longhair">British Semi-longhair</option>
        <option value="british_longhair">British Longhair</option>
        <option value="british_shorthair">British Shorthair</option>
        <option value="burmese">Burmese</option>
        <option value="burmilla">Burmilla</option>
        <option value="california_spangle">California Spangle</option>
        <option value="chantilly_tiffan">Chantilly-Tiffan</option>
        <option value="chartreux">Chartreux</option>
        <option value="chausie">Chausie</option>
        <option value="cheetoh">Cheetoh</option>
        <option value="colorpoint_shorthair">Colorpoint Shorthair</option>
        <option value="cornish_rex">Cornish Rex</option>
        <option value="cymric">Cymric, or Manx Longhair</option>
        <option value="cyprus">Cyprus</option>
        <option value="devon_rex">Devon Rex</option>
        <option value="donskoy">Donskoy, or Don Sphynx</option>
        <option value="dragon_li">Dragon Li</option>
        <option value="dwarf_cat">Dwarf cat, or Dwelf</option>
        <option value="egyptian_mau">Egyptian Mau</option>
        <option value="european_shorthair">European Shorthair</option>
        <option value="exotic_shorthair">Exotic Shorthair</option>
        <option value="foldex">Foldex</option>
        <option value="german_rex">German Rex</option>
        <option value="havana_brown">Havana Brown</option>
        <option value="highlander">Highlander</option>
        <option value="himalayan">Himalayan, or Colorpoint Persian</option>
        <option value="japanese_bobtail">Japanese Bobtail</option>
        <option value="javanese">Javanese</option>
        <option value="karelian_bobtail">Karelian Bobtail</option> <option value="khao_manee">Khao Manee</option>
        <option value="korat">Korat Thailand</option>
        <option value="korean_bobtail">Korean Bobtail</option>
        <option value="korn_ja">Korn Ja</option>
        <option value="kurilian_bobtail">Kurilian Bobtail</option>
        <option value="laperm">LaPerm</option>
        <option value="lykoi">Lykoi</option>
        <option value="maine_coon">Maine Coon</option>
        <option value="manx">Manx</option>
        <option value="mekong_bobtail">Mekong Bobtail</option>
        <option value="minskin">Minskin</option>
        <option value="munchkin">Munchkin</option>
        <option value="nebelung">Nebelung</option>
        <option value="napoleon">Napoleon</option>
        <option value="norwegian_forest_cat">Norwegian Forest Cat</option>
        <option value="ocicat">Ocicat</option>
        <option value="ojos_azules">Ojos Azules</option>
        <option value="oregon_rex">Oregon Rex</option>
        <option value="oriental_bicolor">Oriental Bicolor</option>
        <option value="oriental_shorthair">Oriental Shorthair</option>
        <option value="oriental_longhair">Oriental Longhair</option>
        <option value="perfold">PerFold</option>
        <option value="persian_modern_persian_cat">Persian (Modern Persian Cat)</option>
        <option value="persian_traditional_persian_cat">Persian (Traditional Persian Cat)</option>
        <option value="peterbald">Peterbald</option>
        <option value="pixie_bob">Pixie-bob</option>
        <option value="raas">Raas</option>
        <option value="ragamuffin">Ragamuffin</option>
        <option value="ragdoll">Ragdoll</option>
        <option value="russian_blue">Russian Blue</option>
        <option value="russian_white_black_and_tabby">Russian White, Black and Tabby</option>
        <option value="sam_sawe">Sam Sawe</option>
        <option value="savannah">Savannah</option>
        <option value="scottish_fold">Scottish Fold</option>
        <option value="selkirk_rex">Selkirk Rex</option>
        <option value="serengeti">Serengeti</option>
        <option value="serrade_petit">Serrade petit</option>
        <option value="siamese">Siamese</option>
        <option value="siberian">Siberian</option>
        <option value="singapura">Singapura</option>
        <option value="snowshoe">Snowshoe</option>
        <option value="sokoke">Sokoke</option>
        <option value="somali">Somali</option>
        <option value="sphynx">Sphynx</option>
        <option value="suphalak">Suphalak</option>
        <option value="thai">Thai</option>
        <option value="thai_lilac">Thai Lilac</option>
        <option value="tonkinese">Tonkinese</option>
        <option value="toyger">Toyger</option>
        <option value="turkish_angora">Turkish Angora</option>
        <option value="turkish_van">Turkish Van</option>
        <option value="ukrainian_levkoy">Ukrainian Levkoy</option>
        <option value="york_chocolate">York Chocolate</option>
      </optgroup>
    </select><br><br>
    <label for="fur_color">Fur Color:</label>
    <select id="fur_color" name="fur_color">
      <option value="white">White</option>
      <option value="cream">Cream</option>
      <option value="golden">Golden</option>
      <option value="orange">Orange</option>
      <option value="light_brown">Light Brown</option>
      <option value="medium_brown">Medium Brown</option>
      <option value="dark_brown">Dark Brown</option>
      <option value="black">Black</option>
      <option value="light_gray">Light Gray</option>
      <option value="dark_gray">Dark Gray</option>
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
      <option value="color_point">Color Point</option>
      <option value="solid_color">Solid Color</option>
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

    <label for="size">Size:</label>
    <select id="size" name="size">
      <option value="very_small">Very Small (&lt;10 lbs)</option>
      <option value="small">Small (10-25 lbs)</option>
      <option value="medium">Medium (26-50 lbs)</option>
      <option value="large">Large (51-100 lbs)</option>
      <option value="very_large">Very Large (&gt;100 lbs)</option>
    </select><br><br>

    <label for="additional_description">Additional Description:</label><br>
    <textarea id="additional_description" name="additional_description" rows="4" cols="50"></textarea><br><br>

    <label for="condition">Condition:</label>
    <select id="condition" name="condition">
      <option value="malnourished">Malnourished</option>
      <option value="sick">Sick</option>
      <option value="injured">Injured</option>
      <option value="tired">Tired</option>
      <option value="healthy">Healthy</option>
      <option value="unknown">Unknown</option>
    </select><br><br>

    <label for="sociability">Sociability:</label>
    <select id="sociability" name="sociability">
      <option value="friendly">Friendly - Okay to approach</option>
      <option value="cautious">Cautious</option>
      <option value="skittish">Skittish</option>
      <option value="temperamental">Temperamental</option>
      <option value="aggressive">Aggressive - Do not approach</option>
      <option value="unknown">Unknown</option>
    </select><br><br>

    <input type="submit" value="Submit">
  </form>
</body>
</html>