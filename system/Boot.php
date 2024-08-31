<?php

    namespace Philum;

    use Philum\Packages\Dotenv;
    use Philum\Packages\Ignition;
    use Philum\Packages\Eloquent;
    use RF\Router\Route;

    class Boot {

        private static Dotenv $dotenv;
        private static Ignition $ignition;
        private static Eloquent $eloquent;

        public static function init() {
            self::$dotenv = new Dotenv();
            self::$ignition = new Ignition();
            self::$eloquent = new Eloquent();
        }

        public static function run() {
            self::init();

            self::$dotenv->set();
            self::$ignition->set();
            self::$eloquent->set();

            self::postSystem();
        }

        public static function postSystem() {
            require "app/Routes/Route.php";
            Route::run();
        }

    }
