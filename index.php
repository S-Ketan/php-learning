<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <main>
        <form action="includes/formhandler.php" method="post">
            <label for="firstname">Firstname?</label>
            <input type="text" name="firstname" id="firstname" placeholder="Firstname...">
            <label for="lastname">Lastname?</label>
            <input type="text" name="lastname" id="lastname" placeholder="Lastname...">
            <label for="favoritepet">Fav Pet?</label>
            <select name="favoritepet" id="favoritepet">
                <option value="none">None</option>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
                <option value="bird">Bird</option>
            </select>
            <button type="submit">Submit</button>
        </form>
    </main>
</body>

</html>