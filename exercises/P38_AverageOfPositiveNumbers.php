<?php

class P38_AverageOfPositiveNumbers
{
    public function main(): void
    {
        $sum = 0;
        $count = 0;

        while (true) {
            $input = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

            if ($input === 0) {
                break;
            }

            if ($input > 0) {
                $sum += $input;
                $count++;
            }
        }

        if ($count === 0) {
            echo "Cannot calculate the average\n";
        } else {
            $average = $sum / $count;
            echo number_format($average, 1, '.', '') . "\n";
        }
       
    }
}
