<!-- write a php script to accept any number then check whether the given number is even or odd -->

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
        <label for="number">Enter number: </label>
        <input type="number" name="number" id="">
        <input type="submit" value="Submit">
        <input type="datetime-local" name="" id="">
        <input type="color" name="" id="">
    </form> 

    <?php 
    $a = $_POST['number'];
    if ($a%2==0) {
        echo "Even Number";
    }
    else {
        echo "Odd Number";
    }
    ?>
</body>
</html>