<?php
if(isset($_POST['submit'])) {
    $a = $_POST['dsa'];
    if ($a>60) {
        echo "Marks exceeded Limit";
    }
    else {
if ($a<60&&$a>50) {
        echo "A";
    }
elseif ($a<50&&$a>40) {
    echo "B";
}
elseif ($a<40&&$a>30) {
    echo "C";
}
elseif ($a<30&&$a>20) {
    echo "D";
}
else {
    echo "E";
}
}
}
?>