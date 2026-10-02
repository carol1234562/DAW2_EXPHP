<?php

class P19_Positivity
{
    public function main(): void
    {
        echo "Give a number: "; 

        $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        if ( (int)$input < 0 ) {
            echo "The number is not positive.\n";
        } else if ( (int)$input === 0) {
            echo "The number is not positive. \n"; 
            }else {  
                echo "The number is positive.\n"; 
            }

        // Write your code here
        // Prompt the user for input       
        // Get input from the user
        // Check year value
       
    }
}
