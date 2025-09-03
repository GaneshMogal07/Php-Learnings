<!-- 1.PHP has different types → String, Integer, Float, Boolean, Array, Object, NULL.
2.Each type stores a specific kind of value. -->

<?php
$text = "Hello i am ganesh "; // String
$text1 = "Hello i am ganesh111 "; 
$number = 25;    // Integer
$price = 99.99;  // Float
$isAdmin = true; // Boolean

function greek() {
    global $text1, $number, $price; // bring variables inside function
    echo $text1 . "<br>";  // string concatenation
    echo $number . "<br>";
    echo $price . "<br>";
}
greek();
?>


