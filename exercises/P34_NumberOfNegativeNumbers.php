<?php

class P34_NumberOfNegativeNumbers
{
    public function main(): void
    {
        $nega = 0;

        while (true) {
            echo "Give a number:\n";
            $input = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

            if ($input === 0) {
                break;
            }

            if ($input < 0) {
                $nega++;
            }
        }

        echo "Number of negative numbers: " . $nega . "\n";
       
    }
}
