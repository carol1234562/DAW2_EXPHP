<?php

class P29_GiftTax
{
    public function main(): void
    {
       echo "Value of the gift?\n";
        $input = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        
        if ($input < 5000) {
            echo "No tax!\n";
        } elseif ($input <= 25000) {
            $tax = 100 + ($input - 5000) * 0.08;
            echo "Tax: " . number_format($tax, 1, '.', '') . "\n";
        } elseif ($input <= 55000) {
            $tax = 1700 + ($input - 25000) * 0.10;
            echo "Tax: " . number_format($tax, 1, '.', '') . "\n";
        } elseif ($input <= 200000) {
            $tax = 4700 + ($input - 55000) * 0.12;
            echo "Tax: " . number_format($tax, 1, '.', '') . "\n";
        } elseif ($input <= 1000000) {
            $tax = 22100 + ($input - 200000) * 0.15;
            echo "Tax: " . number_format($tax, 1, '.', '') . "\n";
        } else {
            $tax = 142100 + ($input - 1000000) * 0.17;
            echo "Tax: " . number_format($tax, 1, '.', '') . "\n";
        }
    }
}
