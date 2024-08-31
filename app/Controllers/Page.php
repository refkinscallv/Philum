<?php

    namespace Philum\App\Controllers;

    use Philum\App\Controllers\BaseController;

    class Page extends BaseController {

        public function __construct() {
            parent::__construct();
        }

        public function page404() {
            $this->view->load("page404", [
                "title" => $_SERVER["APP_NAME"]
            ], 404);
        }

    }
