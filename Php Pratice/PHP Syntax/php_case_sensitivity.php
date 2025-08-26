<!-- PHP Case Sensitivity

Keywords (if, else, echo) are not case-sensitive.

Variable names are case-sensitive. -->


<?php
echo "Hello<br>";
ECHO "World<br>";   // works (keywords not case-sensitive)

$name = "Ganesh";
echo $name;   // ✅ works
echo $Name;   // ❌ error: undefined variable
?>
output-Hello
World
Ganesh
Warning: Undefined variable $Name in C:\Users\GaneshMogal\Desktop\Php Pratice\Php-Learnings\Php Pratice\PHP Syntax\php_case_sensitivity.php on line 7