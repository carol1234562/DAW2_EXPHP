<?php

class P22_GradesAndPoints
{
    public function main(): void
    {
        echo "Give points[0-100]:\n"; 

        $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        if ((int) $input < 0) {
            echo "impossible!\n";
        } else if ((int)$input <= 49 ) {
            echo "failed\n";
        } else if ((int)$input <= 59) {
            echo "1\n";       
        } else if ((int)$input <= 69) {
            echo "2\n";
        } else if ((int)$input <= 79) {
            echo "3\n";
        } else if ((int)$input <= 89){
            echo "4\n";
        }   else if ((int)$input <= 100) {
            echo "5\n";
        }  else if ((int)$input > 100){
            echo " incredible!";
        }

}
}
