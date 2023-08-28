<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    $a=20;
    var_dump($a);
    echo "<br>";

    $b=3.4;
    var_dump($b);
    echo "<br>";

    $ab="hello";
    var_dump($ab);
    echo "<br>";

    $arr=[20,"hi",30,30.4];
    var_dump($arr);
    echo "<br>";
    
    for ($i=0; $i < 4; $i++) { 
        echo "<br>$arr[$i]";
    }

    echo "<br><br>";

    // $friends = ["Sangita", "Shanti", "Pabitra", "Soniya"];

    // foreach ($friends as $friend) {
    //     echo $friend,"<br>";
    // }

        $friends = ["one"=>"Sangita",
        "two"=>"Shanti",
        "three"=>"Radha"]; //associative array

    echo "<br><br>";

    foreach ($friends as $index => $friend) {
        echo $index.'-'.$friend,"<br>";
    }

?>
    
</body>
</html>