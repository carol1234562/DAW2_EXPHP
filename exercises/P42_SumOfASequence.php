<?php

class P42_SumOfASequence
{
    public function main(): void
    {
        // Write your code here
        echo "Last number?\n";
        $n = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        $sum = 0;
        for ($i = 1; $i <= $n; $i++) {
            $sum += $i;
        }

        echo "The sum is " . $sum . "\n";
       
    }
}
