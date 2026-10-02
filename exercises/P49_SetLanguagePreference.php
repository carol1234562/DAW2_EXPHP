<?php
session_start();

class P49_SetLanguagePreference {
    private array $allowedLanguages = ['en', 'es', 'fr', 'de'];

    public function main(): void {
       $lang = 'en';

        if (isset($_SESSION['lang'])) {
            $lang = $_SESSION['lang'];
        }

        if (isset($_GET['lang'])) {
            $requestedLang = $_GET['lang'];
            $isAllowed = false;

            foreach ($this->allowedLanguages as $allowed) {
                if ($allowed === $requestedLang) {
                    $isAllowed = true;
                    break;
                }
            }

            if ($isAllowed) {
                $lang = $requestedLang;
            } else {
                $lang = 'en';
            }
        }

        $_SESSION['lang'] = $lang;
        echo "Language set to " . $lang;
    }
}
