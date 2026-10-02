<?php

class P26_Same
{
    public function main(): void
    {
        echo "Enter the first string:\n" ;   
        $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        echo "Enter the second string:\n" ;   
        $input2 = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        if ($input === $input2){
            echo "Same\n";
        } else{
            echo "Different\n";
        }
      
    }
}
