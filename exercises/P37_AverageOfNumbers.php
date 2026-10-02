<?php

class P37_AverageOfNumbers
{
    public function main(): void
    {
        $count = 0;
        $sum = 0;

        while (true) {
            $input = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

            if ($input === 0) {
                break;
            }

            $sum += $input;
            $count++;
        }

        if ($count > 0) {
            $average = $sum / $count;
        } else {
            $average = 0;
        }

        echo "Average of the numbers: " . $average;
    }
}
