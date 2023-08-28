<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        String 1<input type="text" name="first">
        String 2<input type="text" name="second">
            <input type="submit" name="submit">
    </form>
    <?php 
        if(isset($_POST['submit'])) {
            $first = $_POST['first'];
            $second = $_POST['second'];
            if(strcmp($first, $second)) {
                echo "not equal";
            }
            else {
                echo "equal";
            }
        }
    ?>
</body>
</html>