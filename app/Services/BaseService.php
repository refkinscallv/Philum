<?php

    namespace Philum\App\Services;

    use Philum\Packages\Common;
    use Philum\Packages\Cookie;
    use Philum\Packages\Crypto;
    use Philum\Packages\Session;
    use Philum\Packages\Validation;

    class BaseService {

        public Common $common;
        public Cookie $cookie;
        public Crypto $crypto;
        public Session $session;
        public Validation $validation;

        public function __construct() {

            $this->common = new Common();
            $this->cookie = new Cookie();
            $this->crypto = new Crypto();
            $this->session = new Session();
            $this->validation = new Validation();

        }

        public function result($status = true, $code = 200, $message = null, $result = null, $custom = []): array {
            $defaultResponse = [
                "status" => $status,
                "code" => $code,
                "message" => $message,
                "result" => $result
            ];
            
            if(is_array($custom) && !empty($custom)) {
                return array_merge($defaultResponse, $custom);
            }

            return $defaultResponse;
        }

    }
