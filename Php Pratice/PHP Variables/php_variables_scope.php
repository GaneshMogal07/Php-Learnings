<!-- Scope means where you can use a variable in your code.

Types → Local, Global, Static. -->



🔹 Summary:

Global → defined outside, accessible anywhere (if declared global).

Local → exists only inside the function.

Static → remembers its value between multiple calls to the same function.


<?php
$x = 10; // Global variable

function greek(){
         global $x ;
         echo " hello Ganesh mogal from shirdi total km :$x";
}
greek();











