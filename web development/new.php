<!-- write a php script to accept any positive numbers and increment countdown upto 100 -->

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
    <label for="number">Enter Number: </label>
    <input type="number" name="number">
    <input type="submit" value="Enter">
</form>
    
    <?php 
    $i;
    $a = $_POST['number'];
        for($i=$a;$i<=100;$i++) {
            echo "<p>$i</p>";
        }

?>

</body>
</html>