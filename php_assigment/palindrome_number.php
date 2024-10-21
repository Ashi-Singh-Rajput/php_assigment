<?php
$num = 303; // Example number

// Reverse the number as a string
$reverse = strrev($num);

if ($num == $reverse) {
    echo "$num is a palindrome.";
} else {
    echo "$num is not a palindrome.";
}
?>
