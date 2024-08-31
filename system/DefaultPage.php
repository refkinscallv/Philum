<?php

    namespace Philum;

    class DefaultPage {

        public static function set() {
            http_response_code(500);
            include $_SERVER["DOCUMENT_ROOT"] . "/public/views/default.php";
        }

    }
