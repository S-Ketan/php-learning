<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $tasks = [
        "laundary" => "daniel",
        "dishes" => "john",
        "trash" => "frida",
        "cleaning" => "Bella",

    ];
    // echo $tasks["laundary"];
    // print_r($tasks);
    // $tasks["dusting"] = "jane";

    
    $fruits = ["apple", "banana", "cherry"];
    array_push($fruits, "mango");

    $test=["strawberry", "blueberry"];
    array_splice($fruits,2,0, $test);

    ?>
</body>

</html>