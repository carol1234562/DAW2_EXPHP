<?php

class P28_LeapYear
{
    public function main(): void
    {
        echo "Give a year:\n";
        $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        if (((int)$input %  4 == 0  & (int)$input % 100 !=  0 ) || ($input % 400 === 0)) {
            echo "The year is a leap year.\n";
        } else {
            echo "The year is not a leap year.\n";
        }
        
       
    }
}
