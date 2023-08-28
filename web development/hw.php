<!-- wap to accpet marks of a student where subjects are nepali, maths, science, sanskrit, computer
 and social also calculate average, division and highest marks among the given subjects -->

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <style>
      form p input {
    width: 80px;
}
   </style>
</head>

<body>
   <form method="post">
      <p>
         <label for="nepali">Nepali</label>
         <input type="number" id="nepali" name="nepali"><br>
      </p>

      <p>
         <label for="maths">Maths</label>
         <input type="number" id="maths" name="maths"><br>
      </p>

      <p>
         <label for="science">Science</label>
         <input type="number" id="science" name="science"><br>
      </p>

      <p>
         <label for="sanskrit">Sanskrit</label>
         <input type="number" id="sanskrit" name="sanskrit"><br>
      </p>


      <p>
         <label for="computer">Computer</label>
         <input type="number" id="computer" name="computer"><br>
      </p>

      <p>
         <label for="social">Social</label>
         <input type="number" id="social" name="social"><br>
      </p>

      <?php

      $nepali = $_POST['nepali'];
      $maths = $_POST['maths'];
      $science = $_POST['science'];
      $sanskrit = $_POST['sanskrit'];
      $computer = $_POST['computer'];
      $social = $_POST['social'];

      $avg = ($nepali + $maths + $science + $sanskrit + $computer + $social) / 6;

      echo "<p>Percentage: $avg</p>";

      if ($avg >= 90 && $avg < 100) {
         echo "<p>Division: Distinction</p>";
      }     
      elseif ($avg >= 80 && $avg < 90) {
         echo "<p>Division: First</p>";
      } 
      elseif ($avg >= 70 && $avg < 80) {
         echo "<p>Division: Second</p>";
      }
      elseif($avg >= 60 && $avg < 70) {
         echo "<p>Division: Third</p>";
      }
      elseif ($avg >= 50 && $avg < 60) {
         echo "<p>Division: Fourth</p>";
      }
      elseif ($avg >= 40 && $avg  < 50) {
         echo "<p>Non=Graded</p>";
      }
      else {
         echo "";
      }


      if ($nepali > $maths && $nepali > $science && $nepali > $sanskrit && $nepali > $computer && $nepali > $social) {
         echo "<p>Nepali: $nepali</p>";
      }

      elseif ($maths > $science && $maths > $sanskrit && $maths > $computer && $maths > $social) {
         echo "<p>Maths: $maths</p>";
      } 

      elseif ($science > $sanskrit && $science > $computer && $science > $social) {
         echo "<p>Science: $science</p>";
      }

      elseif ($sanskrit > $computer && $sanskrit > $social) {
         echo "<p>Sanskrit: $sanskrit</p>";
      }

      elseif ($computer > $social) {
         echo "<p>Computer: $computer</p>";
      }

      elseif ($social > $maths && $social > $science && $social > $sanskrit && $social > $computer && $social > $nepali){
         echo "<p>Social: $social</p>";   
      }
      else {
         echo "";
      }
      
      ?>

      <input type="submit" value="Submit">
   </form>
</body>

</html>