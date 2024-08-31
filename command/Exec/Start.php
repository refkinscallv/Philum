<?php

    namespace Philum\CLI\Exec;

    use Philum\CLI\Helper;

    class Start {

        public static function exec() {
            $dependenciesFile = "vendor/autoload.php";
            if (!file_exists($dependenciesFile)) {
                Helper::time()
                    ::label("Philum")
                    ::font("red", "", "bold")
                    ::exec("Please install dependencies first with command 'php cli build'.");
                die();
            }

            Helper::time()
                ::label("Philum")
                ::font("blue", "", "bold")
                ::exec("Local Server Running On : http://127.0.0.1:8080.");
            Helper::time()
                ::label("Philum")
                ::font("yellow", "", "bold")
                ::exec("Press 'CTRL + C' to stop local server.");
            Helper::exec("php -S 127.0.0.1:8080", true);
        }

    }
