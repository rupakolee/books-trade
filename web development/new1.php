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
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
        <input type="submit" value="submit" id="submit" name="submit">
    </form>

    <?php

        if (isset($_POST["submit"])) {
            echo "Button is clicked";
        }
        else {
            echo "Button is not clicked";
        }

        if (isset($_POST["username"])) {
            echo "<p>Data aayo</p>";
        }
        else {
            echo "<p>data aayena</p>";
        }

        if (empty($_POST["username"])) {
            echo "Empty";
        }
        else {
            echo "Not empty";
        }
    ?>
</body>
</html>