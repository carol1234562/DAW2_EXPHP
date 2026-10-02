<?php

class P31_AreWeThereYet
{
    public function main(): void
    {
        while (true) {
            echo "Give a number:\n";
            $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
            
            if ((int)$input === 4 ) {
                break;
            }
        }
    }
}
