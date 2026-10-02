<?php

class P40_CountingToHundred
{
    public function main(): void
    {
        $n = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        
        
        for ($i = $n; $i <= 100; $i++) {
            echo $i . "\n";
        }
       
    }
}
