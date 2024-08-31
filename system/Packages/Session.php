<?php

    namespace Philum\Packages;

    use RF\Session\Session AS RFSession;

    class Session extends RFSession {

        public function __construct() {
            parent::__construct([
                "timeout" => $_SERVER["TIMEOUT"] ?? 3600
            ]);
        }

    }
