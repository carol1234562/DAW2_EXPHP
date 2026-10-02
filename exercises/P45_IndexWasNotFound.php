<?php

class P45_IndexWasNotFound
{
    public function main(): void
    {
        
        $array = [6, 2, 8, 1, 3, 0, 9, 7];

        echo "Search for? ";
        $toSearch = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        $found = false;
        $index = 0;

        $i = 0;
        while ($i < count($array)) {
            if ($array[$i] === $toSearch) {
                $found = true;
                $index = $i;
                break;
            }
            $i++;
        }

        if ($found) {
            echo $toSearch . " is at index " . $index . ".\n";
        } else {
            echo $toSearch . " was not found.\n";
        }
       
    }
}
