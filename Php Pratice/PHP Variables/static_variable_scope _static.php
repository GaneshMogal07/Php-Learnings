<?php
function showStatic() {
    static $z = 0; // Static variable
    $z++;
    echo "Static z = $z <br>";
}

showStatic(); // Static z = 1
showStatic(); // Static z = 2
showStatic(); // Static z = 3
?>
