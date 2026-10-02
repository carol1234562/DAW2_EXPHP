<?php
session_start();

class P50_AddToCart {
    public function main(): void {
        // Write your code here
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        if (isset($_GET['item'])) {
            $newItem = $_GET['item'];
            $_SESSION['cart'][] = $newItem;
        }

        $cartString = '';
        $i = 0;
        while ($i < count($_SESSION['cart'])) {
            if ($i > 0) {
                $cartString = $cartString . ',';
            }
            $cartString = $cartString . $_SESSION['cart'][$i];
            $i++;
        }

        echo $cartString;
       
    }
}
