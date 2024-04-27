<!DOCTYPE html>
<html>
<head>
    <title>Search Pets</title>
</head>
<body>
    <h2>Search Pets</h2>
    <form method="post" action="searchpets-db.php">
        <label for="species">Species:</label>
        <select id="species" name="species">
            <option value="dog">Dog</option>
            <option value="cat">Cat</option>
        </select><br><br>
        <!-- Other search criteria options -->

        <input type="submit" name="search" value="Search">
    </form>
</body>
</html>