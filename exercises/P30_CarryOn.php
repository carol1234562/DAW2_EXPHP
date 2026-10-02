<?php

class P30_CarryOn
{
    public function main(): void
    {
        while (true) {
            echo "Shall we carry on?\n";
            $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
            
            if ($input === "no") {
                break;
            }
        }
    }
}
