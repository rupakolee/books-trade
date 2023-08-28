<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="radio" name="country" id="country" value="Nepal">Nepal</br>
        <input type="radio" name="country" id="country" value="India">India</br>
        <input type="radio" name="country" id="country" value="Japan">Japan</br>
        <input type="submit" value="Submit" name="submit">
    </form>

    <?php

    if (isset($_POST['submit'])) {
        if (isset($_POST['country'])) {
            $selectedCountry=$_POST['country'];
            echo "{$selectedCountry}";
        }
        else {
            echo "Please make a selection";
        }
    }
    ?>
</body>
</html>