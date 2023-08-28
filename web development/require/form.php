<?php require 'calculate.php'; ?>
<?php var_dump($errors) ;

foreach ($errors as $error) {
echo "<li>{$error}</li>";
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>

<form method="post">
    <label for="first">First</label>
    <input type="text" name="article" id="">
    <label for="second">Second</label>
    <input type="text" name="content" id=""> 
        <button>Submit</button>
</form>

   
</body>
</html>
