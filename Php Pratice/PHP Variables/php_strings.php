<!-- PHP Strings
Strings are text values written inside quotes " " or ' '.
PHP has many functions to work with strings. -->
<?php
$str = "Hello PHP";
echo strlen($str) . "<br>"; // strlen() → counts total characters in the string
                               // "Hello PHP" has 9 characters (including space)
echo str_word_count($str);   // str_word_count() → counts total words in the string
                             // "Hello PHP" has 2 words

// output- 
// 9
// 2