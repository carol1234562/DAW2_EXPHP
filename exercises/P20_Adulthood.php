<?php

class P20_Adulthood
{
    public function main(): void
    {
        echo "How old are you?\n "; 

        $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        if ( (int)$input < 18 ) {
            echo "You are not an adult\n";
        } else if ( (int)$input === 18) {
            echo "You are an adult \n"; 
            }else {  
                echo "You are an adult \n"; 
            }
        // Write your code here
        // Prompt the user for input
       
        // Get input from the user

        // Check year value
       
    }
}
