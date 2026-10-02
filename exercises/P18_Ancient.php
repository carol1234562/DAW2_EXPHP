<?php

class P18_Ancient
{
    public function main(): void
    {
        // Write your code here
        // Prompt the user for input
        echo "Give a year:\n";
        // Get input from the user
        $year = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        // Check year value
        // use int to help with teh result 
        if ((int)$year < 2015) {
            echo "Ancient history!";
     
    }
}
}
