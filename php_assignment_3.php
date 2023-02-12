<?php
/*
 * 1. Write a Reusable  PHP Function that can check Even & Odd Number And Return Decision.
 * 
 * intParityCheck:  Checks the parity of an integer and returns strings "odd" or "even".
 */

function intParityCheck($num)
{
    if ($num % 2 == 0) {
        return "even";
    } else {
        return "odd";
    }
}

echo "Number 11 is " . intParityCheck(11) . "\n";
echo "Number 8 is " . intParityCheck(8) . "\n";

?>