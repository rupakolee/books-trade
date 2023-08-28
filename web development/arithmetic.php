<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculator</title>
    <style>

:root {
    --primary-color: #f06fbc;
    --secondary-color: rgb(107,120,235);
}

.container {
    margin: auto;
    width: 540px;
    height: 500px;
    border: 4px solid var(--primary-color);
    border-radius: 15px;
}

.input {
    background-color: var(--secondary-color);
    height: 110px;
    border-radius: 12px;
    color: #fff;
}

.input form{
    display: flex;
    align-items: center;
    font-family: Arial, Helvetica, sans-serif;
}

.input form p input {
    outline: none;
    border: none;
    padding: 3px;
    border-radius: 6px;
}

.input form .button{
    width: 100px;
    padding: 5px;
    position: absolute;
    top: 80px;
    font-size: 14px;
    font-weight: 800;
    font-family: monospace;
    background-color: var(--primary-color);
    border-radius: 10px;
    border: none;
    color: #fff;
    cursor: pointer;
    transition: 0.3s;
}

.input form .button:hover{
    background-color: #fff;
    color: var(--secondary-color);
}

    </style>
</head>

<body>
    <div class="container">

        <div class="input">
            <form method="post">
                <p>
                    <label for="num1">First Number: </label>
                    <input type="number" name="num1" id="num1">
                </p>
                <p>
                    <label for="num2">Second Number: </label>
                    <input type="number" name="num2" id="num2">
                </p>
                <input type="submit" value="Enter" class="button">
            </form>
        </div>

    <!-- <div class="output">
        <p class="task">Addition: </p>
        <p class="task">Subtraction: </p>
        <p class="task">Multiplication: </p>
        <p class="task">Division: </p>
        <p class="task">Modulus: </p>
    </div> -->

    <?php

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $add = $num1 + $num2;
    $sub = $num1 - $num2;
    $mul = $num1 * $num2;
    $div = $num1 / $num2;
    $mod = $num1 % $num2;

    echo
    "<p class='task'>Addition: {$add}</p>
<p class='task'>Subtraction: {$sub}</p>
<p class='task'>Multiplication: {$mul}</p>
<p class='task'>Division: {$div}</p>
<p class='task'>Modulus: {$mod}</p>";


    // echo "Addition: $add";
    // echo "Subtraction: $sub";
    // echo "Multiplication: $mul";
    // echo "Division: $div";
    // echo "Modulus: $mod";
    // echo "Addition = $num1+$num2";
    ?>

    <button onclick="reset()">Clear</button>
    <!-- <script>
        let a = document.getElementsByClassName("task");
        function reset() {
            console.log(a);
            a.textContent=0;
        }
    </script> -->
    </div>

</body>
</html>