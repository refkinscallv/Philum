<?php

    namespace Philum\CLI\Exec;

    use Philum\CLI\Helper;

    class Help {

        public static function exec() {
            $commands = [
                "start  :" => "Start the built-in PHP server.",
                "build  :" => "Build the project.",
                "update :" => "Update the project.",
                "help   :" => "Display this help message."
            ];

            Helper::time()
                ::label("Philum")
                ::font("blue", "", "bold")
                ::exec("Help");
            Helper::time()
                ::label("Philum")
                ::font("yellow", "", "bold")
                ::exec("\n\nCommand List:");

            foreach ($commands as $command => $description) {
                Helper::font("yellow")
                    ::exec("- $command $description");
            }
            
            Helper::exec("\n");
        }
    }
