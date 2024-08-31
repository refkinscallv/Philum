<?php

    namespace Philum\App\Controllers;

    use Philum\Packages\Common;
    use Philum\Packages\Cookie;
    use Philum\Packages\Crypto;
    use Philum\Packages\Request;
    use Philum\Packages\Response;
    use Philum\Packages\Session;
    use Philum\Packages\Validation;
    use Philum\Packages\View;

    class BaseController {

        public Common $common;
        public Cookie $cookie;
        public Crypto $crypto;
        public Request $request;
        public Response $response;
        public Session $session;
        public Validation $validation;
        public View $view;

        public function __construct() {

            $this->common = new Common();
            $this->cookie = new Cookie();
            $this->crypto = new Crypto();
            $this->request = new Request();
            $this->response = new Response();
            $this->session = new Session();
            $this->validation = new Validation();
            $this->view = new View();

        }

    }
