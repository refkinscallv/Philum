<?php

    namespace Philum\Packages;

    use Dotenv\Dotenv AS PHPDotenv;

    class Dotenv {

        public function set() {
            PHPDotenv::createImmutable(str_replace("/", "\\", $_SERVER["DOCUMENT_ROOT"]))->load();
        }

    }
