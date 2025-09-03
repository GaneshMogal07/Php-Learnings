<?php
function showLocal() {
    $y = 20; // Local variable
    echo "Local y inside function = $y <br>";
}

showLocal();

// This will cause an error because $y is local to showLocal():
// echo "Local y outside function = $y"; 
?>
