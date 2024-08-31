<?php

    namespace Philum\Packages;

    use Spatie\Ignition\Ignition AS SpatieIgnition;

    class Ignition {

        public function set(): void {
            if(!isset($_SERVER["ENVIRONMENT"]) || $_SERVER["ENVIRONMENT"] === "production") {
                error_reporting(0);
                return;
            }

            error_reporting(-1);

            SpatieIgnition::make()
                ->applicationPath($_SERVER["DOCUMENT_ROOT"])
                ->useDarkMode()
                ->shouldDisplayException(true)
                ->register();
        }

    }
