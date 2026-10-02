<?php

class P32_OnlyPositives
{
    public function main(): void
    // aqui no usar return ya que nos cierra el while
    {
        while (true) {
            echo "Give a number:\n";
            $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
            
            if ((int)$input < 0 ) {
                echo "Unsuitable number\n";
            } else if ((int)$input > 0 ) {
                echo $input * $input . "\n";
            } else if ((int)$input == 0) {
                break; 
            }
        }
       
    }
}
