<?php

class P35_SumOfNumbers
{
    public function main(): void
    {
        $count = 0;

        while (true) {
            echo "Give a number:\n";
            $input = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

            if ($input === 0) {
                break;
            }

            $count += $input;
        }

        echo "Sum of the numbers: " . $count . "\n";
        
        
       }
       
    }
