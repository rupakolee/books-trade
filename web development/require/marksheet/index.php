<!-- form banau
tyo form chai separate file ma hoss
include garera main page ma dekhako hunu paryo
data submit vayera next page ma janu paryo
ani tyo data feri index page mai display hunu paryo
marksheet wala form -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marksheet Calculator</title>
    <style>
        .main {
            border: 1px solid black;
            width: 600px;
            height: 475px;
            margin: auto;
        }

        .head {
            background-color: rgb(115 39 173);
            margin-top: -21px;
            height: 50px;
        }

        .head h1 {
            color: #fff;
            text-align: center;
        }

        .student {
            padding: 7px 5px;
            line-height: 24px;
        }

        table {
            width: 400px;
            margin: auto;
            border: 1px solid black;
        }

        table tr th {
            padding: 4px 15px;
            border: 1px solid black;
        }

        table tr td {
            padding: 4px 15px;
            border: 1px solid black;
        }

        table tr td input {
            width: 55px;
        }
    </style>
</head>

<body>
    <div class="main">
        <div class="head">
            <h1>Marksheet Calculator</h1>
        </div>
        <div class="student">
            <form action="" method="post">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" autofocus required>
                <label for="rollno">Roll no:</label>
                <input type="number" name="rollno" id="rollno" required>
        </div>
        <hr>
        <table>
            <tr>
                <th>S.N</th>
                <th>Subjects</th>
                <th>Marks Obtained</th>
                <th>Grade</th>
                <th>Status</th>
            </tr>
            <tr>
                <td>1</td>
                <td>PAS</td>
                <td><input type="number" id="pas" name="pas" required></td>
                <td>
                    <?php
                    include "pas.php";
                    ?>
                </td>
                <td>
                    <?php
                    if (isset($_POST['submit'])) {
                        
                        $a = $_POST['pas'];
                        if ($a > 60) {
                            echo "!";
                        } else {
                            if ($a < 24) {
                                echo "Fail";
                            } else {
                                echo "Pass";
                            }
                        }
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Java</td>
                <td><input type="number" id="java" name="java" required></td>
                <td>
                    <?php
                    include "java.php";
                    ?>
                </td>
                <td><?php
                    if (isset($_POST['submit'])) {
                        
                        $a = $_POST['java'];
                        if ($a > 60) {
                            echo "!";
                        } else {
                            if ($a < 24) {
                                echo "Fail";
                            } else {
                                echo "Pass";
                            }
                        }
                    }
                    ?></td>
            </tr>
            <tr>
                <td>3</td>
                <td>DSA</td>
                <td><input type="number" id="dsa" name="dsa" required></td>
                <td>
                    <?php
                    include "dsa.php";
                    ?>
                </td>
                <td>
                    <?php
                    if (isset($_POST['submit'])) {
                        
                        $a = $_POST['dsa'];
                        if ($a > 60) {
                            echo "!";
                        } else {
                            if ($a < 24) {
                                echo "Fail";
                            } else {
                                echo "Pass";
                            }
                        }
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>SAD</td>
                <td><input type="number" id="sad" name="sad" required></td>
                <td> <?php
                        include "sad.php";
                        ?></td>
                <td>
                    <?php
                    if (isset($_POST['submit'])) {
                        
                        $a = $_POST['sad'];
                        if ($a > 60) {
                            echo "!";
                        } else {
                            if ($a < 24) {
                                echo "Fail";
                            } else {
                                echo "Pass";
                            }
                        }
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>Web</td>
                <td><input type="number" id="web" name="web" required></td>
                <td> <?php
                        include "web.php";
                        ?></td>
                <td><?php
                    if (isset($_POST['submit'])) {
                        
                        $a = $_POST['web'];
                        if ($a > 60) {
                            echo "!";
                        } else {
                            if ($a < 24) {
                                echo "Fail";
                            } else {
                                echo "Pass";
                            }
                        }
                    }
                    ?></td>
            </tr>
        </table>
        <input type="submit" value="Submit" name="submit">
        </form>

        <div class="result">
            <p>Percentage:
                <?php
                include "percentage.php";
                ?>
            </p>
            <p>Division:
                <?php
                include "division.php";
                ?>
            </p>
        </div>
    </div>

</body>

</html>