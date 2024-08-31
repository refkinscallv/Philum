<?php

    namespace Philum\Packages;

    class Common {

        private string $baseUrl;

        public function __construct() {
            $this->baseUrl = $this->getBaseUrlFromConfig();
        }

        private function getBaseUrlFromConfig(): string {
            return $_SERVER["BASE_URL"] ?: (isset($_SERVER["HTTPS"]) ? 'https://' : 'http://') . $_SERVER["SERVER_NAME"];
        }

        public function baseUrl(string $path = ''): string {
            $path = trim($path, '/');

            $url = rtrim($this->baseUrl, '/') . '/' . $path;

            return $url;
        }

        public function redirect($uri): void {
            header("location: ". $uri);
        }

        public function generateRandomString(int $length = 32): string {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }

            return $randomString;
        }

    }
