<?php

    namespace Philum\Packages;

    use Illuminate\Database\Capsule\Manager;

    class Eloquent {

        private Manager $manager;

        public function __construct() {
            $this->manager = new Manager();
        }

        public function set(): void {
            $this->manager->addConnection([
                'driver'        => $_SERVER["DB_DRIVER"] ?? 'mysql',
                'host'          => $_SERVER["DB_HOST"],
                'database'      => $_SERVER["DB_NAME"],
                'username'      => $_SERVER["DB_USER"],
                'password'      => $_SERVER["DB_PASS"],
                'charset'       => $_SERVER["DB_CHARSET"] ?? 'utf8',
                'collaction'    => $_SERVER["DB_COLLACTION"] ?? 'utf8_unicode_ci',
                'prefix'        => $_SERVER["DB_PREFIX"] ?? ''
            ]);

            $this->manager->setAsGlobal();
            $this->manager->bootEloquent();
        }

    }
