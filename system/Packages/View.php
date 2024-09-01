<?php

    namespace Philum\Packages;

    use Philum\Packages\Base;

    class View extends Base {

        public $view;

        public function __construct() {
            parent::__construct();

            $this->view = $this;
        }
    
        public function load($file, $data = [], $code = 200) {
            $viewFile = $_SERVER["DOCUMENT_ROOT"] . $_SERVER["VIEW_PATH"] . $file . ".php";

            extract($data);

            ob_start();
            include $viewFile;
            $content = ob_get_clean();

            $this->response->setStatus($code);
            echo $content;
        }

        public function loadCss($file) {
            return $this->common->baseUrl(str_replace("/public/", "", $_SERVER["CSS_PATH"]) . $file);
        }

        public function loadJs($file) {
            return $this->common->baseUrl(str_replace("/public/", "", $_SERVER["JS_PATH"]) . $file);
        }

        public function loadMedia($file) {
            return $this->common->baseUrl(str_replace("/public/", "", $_SERVER["MEDIA_PATH"]) . $file);
        }

    }
