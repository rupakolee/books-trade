<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <input type="checkbox" name="food[]" value="apple">Apple<br>
        <input type="checkbox" name="food[]" value="banana">Banana <br>
        <input type="checkbox" name="food[]" value="mango">mango <br>
        <input type="checkbox" name="food[]" value="grape">grape <br>
        <input type="submit" value="submit" name="submit">
    </form>
<p>This is P</p>
</body>
</html>
<?php

if (isset($_POST["submit"])) {
    $fruits = $_POST["food"];
    if (isset($fruits)) {
            foreach ($fruits as $fruit) {
                echo "{$fruit} <br>";
            }
        }
    }
    ?>