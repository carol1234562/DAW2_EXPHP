<?php

class P39_Counting
{
    public function main(): void
    {
        $n = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        for ($i = 0; $i <= $n; $i++) {
        echo $i . "\n";
       
    }
    }
}