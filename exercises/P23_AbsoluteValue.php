<?php

class P23_AbsoluteValue
{
    public function main(): void
    {
         $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
         $value= -1; 
        if ((int) $input < 0) {
            echo $input * $value ."\n";
        } else {
            echo $input ."\n";
        }
       
    }
}
