<?php

    namespace Philum\Packages;

    use RF\Cookie\Cookie AS RFCookie;

    class Cookie extends RFCookie {

        public function __construct() {
            parent::__construct([
                'cookieName' => $_SERVER['COOKIE_NAME'] ?? 'APP_COOKIE',
                'cookieExpires' => $_SERVER['COOKIE_EXPIRES'] ?? 1,
                'cookiePath' => $_SERVER['COOKIE_PATH'] ?? "/",
                'cookieDomain' => $_SERVER['SERVER_NAME'] ?? "",
                'cookieSecure' => $_SERVER['COOKIE_SECURE'] ?? false,
                'cookieHttpOnly' => $_SERVER['COOKIE_HTTP'] ?? true,
                'cookieEncrypt' => false
            ]);
        }

    }
