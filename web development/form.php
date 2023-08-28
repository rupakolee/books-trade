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
        <select name="country[]" multiple>
            <optgroup label="Asia">
                <option value="Nepal" selected>Nepal</option>
                <option value="India" >India</option>
                <option value="China" >China</option>
            </optgroup>

                <optgroup label="Europe">
                    <option value="America" >America</option>
                    <option value="Canada" selected>Canada</option>
                    <option value="Australia" >Australia</option>
                </optgroup>
        </select>
        <input type="submit" value="Submit" name="submit">
    </form>
    
    <?php  

    if (isset($_POST["submit"])) {
        if (isset($_POST["country"])) {
            // echo "{$_POST["country"]}";
            $countries=$_POST["country"];
            foreach ($countries as $country) {
                echo $country."</br>";
            }
        }
        else {
            echo "Error";
        }
    }
    
    ?>
</body>
</html>