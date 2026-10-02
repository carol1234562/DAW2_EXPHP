<?php

class P21_LargerThanOrEqualTo
{
    public function main(): void
    {
        echo "Give the first number:\n"; 

        $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        echo "Give the second number:\n";

        $input2 = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        if ( (int)$input < (int)$input2 ) {
            echo "Greater number is: " . $input2 . "\n";
            } elseif ( (int)$input > (int)$input2 ) {
                echo "Greater number is: " . $input . "\n";  
            } else {  
                echo "The numbers are equal!\n";
            }
        
    }
}
