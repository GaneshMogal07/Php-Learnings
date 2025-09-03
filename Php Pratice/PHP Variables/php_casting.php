<!-- Casting means changing one type to another.
Example: String "10" → Integer 10. -->

<?php
$x = "100";   // string
$y = (int)$x; // cast to integer
echo $y + 20; // 120
?>


Explanation:

$x = "100";

Here "100" is inside quotes → so it’s a string, not a number.

Example: "100" is like text "Hello" but looks like a number.

$y = (int)$x;

(int) means type casting → convert the value into an integer.

So "100" (string) becomes 100 (integer).

echo $y + 20;

Now $y = 100 (integer).

100 + 20 = 120.

Output = 120