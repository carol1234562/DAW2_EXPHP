<?php

class P41_FromWhereToWhere
{
    public function main(): void
    {
        echo "Where to?\n";
        $to = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        
        echo "Where from?\n";
        $from = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        
        if ($to >= $from) {
            for ($i = $from; $i <= $to; $i++) {
                echo $i . "\n";
            }
        }
    }
}