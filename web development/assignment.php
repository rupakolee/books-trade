<!-- develop a mcq application with 10 questions and 4 options  -->

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
        <div>
            <p>1. Consider a dice with the property that that probability of a face with n dots showing up is proportional to n. The probability of face showing 4 dots is?
            </p>
            <input type="radio" name="first" id="" value="1/7">a) 1/7</br>
            <input type="radio" name="first" id="" value="5/42">b) 5/42</br>
            <input type="radio" name="first" id="" value="1/21">c) 1/21</br>
            <input type="radio" name="first" id="" value="4/21">d) 4/21</br>
        </div>

        <?php
        if (isset($_POST['submit'])) {
            if (isset($_POST['first'])) {
                $firstSelection = $_POST['first'];
                if ($firstSelection == "4/21") {
                    echo "Correct answer";
                } else {
                    echo "Incorrect Answer";
                }
            }
        }
        ?>

        <div>
            <p>2. Let X be a random variable with probability distribution function f (x)=0.2 for |x|<1=0.1 for 1 < |x| < 4=0 otherwise The probability P (0.5 < x < 5) is _____</p>
                    <input type="radio" name="second" id="" value="0.3">a) 0.3</br>
                    <input type="radio" name="second" id="" value="0.5">b) 0.5</br>
                    <input type="radio" name="second" id="" value="0.4">c) 0.4</br>
                    <input type="radio" name="second" id="" value="0.8">d) 0.8</br>
        </div>

        <?php if (isset($_POST['submit'])) {
            if (isset($_POST['second'])) {
                $secondSelectoin = $_POST['second'];
                if ($secondSelectoin == "0.4") {
                    echo "Correct answer";
                } else {
                    echo "Incorrect Answer";
                }
            }
        }
        ?>

        <div>
            <p>3. Runs scored by batsman in 5 one day matches are 50, 70, 82, 93, and 20. The standard deviation is ______
            </p>
            <input type="radio" name="third" id="" value="25.79">a) 25.79</br>
            <input type="radio" name="third" id="" value="25.49">b) 25.49</br>
            <input type="radio" name="third" id="" value="25.29">c) 25.29</br>
            <input type="radio" name="third" id="" value="25.69">d) 25.69</br>
        </div>

        <?php if (isset($_POST['submit'])) {

            if (isset($_POST['third'])) {
                $thirdSelection = $_POST['third'];
                if ($thirdSelection == "25.79") {
                    echo "Correct answer";
                } else {
                    echo "Incorrect Answer";
                }
            }
        }
        ?>

        <div>
            <p>4. Find median and mode of the messages received on 9 consecutive days 15, 11, 9, 5, 18, 4, 15, 13, 17.
            </p>
            <input type="radio" name="fourth" id="" value="13, 6">a) 13, 6</br>
            <input type="radio" name="fourth" id="" value="13, 18">b) 13, 18</br>
            <input type="radio" name="fourth" id="" value="18, 15">c) 18, 15</br>
            <input type="radio" name="fourth" id="" value="15, 16">d) 15, 16</br>
        </div>

        <?php if (isset($_POST['submit'])) {

            if (isset($_POST['fourth'])) {
                $fourthSelection = $_POST['fourth'];
                if ($fourthSelection == "13, 18") {
                    echo "Correct answer";
                } else {
                    echo "Incorrect Answer";
                }
            }
        } ?>

        <div>
            <p>5. Mode is the value of x where f(x) is a maximum if X is continuous.
            </p>
            <input type="radio" name="fifth" id="" value="true">a) True</br>
            <input type="radio" name="fifth" id="" value="false">b) False</br>
            <input type="radio" name="fifth" id="" value="c">c) Both a) and b)</br>
            <input type="radio" name="fifth" id="" value="d">d) None of them</br>
        </div>

        <?php if (isset($_POST['submit'])) {

            if (isset($_POST['fifth'])) {
                $fifthSelection = $_POST['fifth'];
                if ($fifthSelection == "true") {
                    echo "Correct answer";
                } else {
                    echo "Incorrect Answer";
                }
            }
        }
        ?>

        <div>
            <p>6. E (XY)=E (X)E (Y) if x and y are independent.
            </p>
            <input type="radio" name="sixth" id="" value="true">a) True</br>
            <input type="radio" name="sixth" id="" value="false">b) False</br>
            <input type="radio" name="sixth" id="" value="c">c) Both a) and b)</br>
            <input type="radio" name="sixth" id="" value="d">d) None of them</br>
        </div>

        <?php if (isset($_POST['submit'])) {

            if (isset($_POST['sixth'])) {
                $sixthSelection = $_POST['sixth'];
                if ($sixthSelection == "true") {
                    echo "Correct answer";
                } else {
                    echo "Incorrect Answer";
                }
            }
        }
        ?>

        <div>
            <p>7. A coin is tossed up 4 times. The probability that tails turn up in 3 cases is ______
            </p>
            <input type="radio" name="seventh" id="" value="1/2">a) 1/2</br>
            <input type="radio" name="seventh" id="" value="1/3">b) 1/3</br>
            <input type="radio" name="seventh" id="" value="1/4">c) 1/4</br>
            <input type="radio" name="seventh" id="" value="1/6">d) 1/6</br>
        </div>

        <?php if (isset($_POST['submit'])) {

            if (isset($_POST['seventh'])) {
                $seventhSelection = $_POST['seventh'];
                if ($seventhSelection == "1/2") {
                    echo "Correct answer";
                } else {
                    echo "Incorrect Answer";
                }
            }
        } ?>

        <div>
            <p>8. If E denotes the expectation the variance of a random variable X is denoted as?
            </p>
            <input type="radio" name="eighth" id="" value="a">a) (E(X))2</br>
            <input type="radio" name="eighth" id="" value="E(X2)-(E(X))2">b) E(X2)-(E(X))2</br>
            <input type="radio" name="eighth" id="" value="c">c) E(X2)</br>
            <input type="radio" name="eighth" id="" value="d">d) 2E(X)</br>
        </div>

        <?php if (isset($_POST['submit'])) {

            if (isset($_POST['eighth'])) {
                $eighthSelection = $_POST['eighth'];
                if ($eighthSelection == "E(X2)-(E(X))2") {
                    echo "Correct answer";
                } else {
                    echo "Incorrect Answer";
                }
            }
        } ?>

        <div>
            <p>9. X is a variate between 0 and 3. The value of E(X2) is ______
            </p>
            <input type="radio" name="ninth" id="" value="8">a) 8</br>
            <input type="radio" name="ninth" id="" value="7">b) 7</br>
            <input type="radio" name="ninth" id="" value="27">c) 27</br>
            <input type="radio" name="ninth" id="" value="9">d) 9</br>
        </div>

        <?php if (isset($_POST['submit'])) {

            if (isset($_POST['ninth'])) {
                $ninthSelection = $_POST['ninth'];
                if ($ninthSelection == "9") {
                    echo "Correct answer";
                } else {
                    echo "Incorrect Answer";
                }
            }
        }
        ?>

        <div>
            <p>10. The random variables X and Y have variances 0.2 and 0.5 respectively. Let Z= 5X-2Y. The variance of Z is?
            </p>
            <input type="radio" name="tenth" id="" value="3">a) 3</br>
            <input type="radio" name="tenth" id="" value="4">b) 4</br>
            <input type="radio" name="tenth" id="" value="5">c) 5</br>
            <input type="radio" name="tenth" id="" value="7">d) 7</br>
        </div>
        <?php

        if (isset($_POST['tenth'])) {
            $tenthSelection = $_POST['tenth'];
            if ($tenthSelection == "7") {
                echo "Correct answer";
            } else {
                echo "Incorrect Answer";
            }
        }
        ?>

        <p><input type="submit" value="Submit" name="submit"></p>
    </form>


</body>

</html>