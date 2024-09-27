<?php

    namespace Philum\Packages;

    use Dotenv\Dotenv AS PHPDotenv;

    class Dotenv {

        public function set() {
            PHPDotenv::createImmutable($_SERVER["DOCUMENT_ROOT"])->load();
        }

    }
