<?php

class P27_CheckingTheAge
{
    public function main(): void
    {
        echo "How old are you?" ;   
        $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        if((int)$input >= 0  &&  (int)$input <= 120) {
            echo "Ok\n"; 
        } else {
            echo "Impossible!\n";
        }
       
    }
}
