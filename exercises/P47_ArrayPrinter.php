<?php

class P47_ArrayPrinter
{
    public function main(): void
    {
        $array = [5, 1, 3, 4, 2];
        $this->printNeatly($array);
    }

    public function printNeatly(array $array): void
    {
        for ($i = 0; $i < count($array); $i++) {
            if ($i > 0) {
                echo ", ";
            }
            echo $array[$i];
    }
        echo "\n";
    }
}
