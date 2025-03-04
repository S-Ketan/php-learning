<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $favoritepet = htmlspecialchars($_POST["favoritepet"]);

if(empty($firstname) || empty($lastname) || empty($favoritepet)) {
    header("Location: ../index.php");
    exit() ;
}

    echo "This is the data entered by the user";
    echo "<br>";
    echo "Firstname: " . $firstname;
    echo "<br>";
    echo "Lastname: " . $lastname;
    echo "<br>";
    echo "Favorite Pet: " . $favoritepet;
}
?>
