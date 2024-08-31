<?php

    namespace Philum\App\Controllers;

    use Philum\App\Controllers\BaseController;

    class Welcome extends BaseController {

        public function __construct() {
            parent::__construct();
        }

        public function index() {
            $this->view->load("welcome", [
                "title" => $_SERVER["APP_NAME"]
            ], 200);
        }

    }
