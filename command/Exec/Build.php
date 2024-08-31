<?php

    namespace Philum\CLI\Exec;

    use Philum\CLI\Helper;

    class Build {

        public static function exec($type) {
            $dependenciesFile = "vendor/autoload.php";

            if($type === "build") {
                if (file_exists($dependenciesFile)) {
                    Helper::time()
                        ::label("Philum")
                        ::font("yellow", "", "bold")
                        ::exec("Dependencies installed. Your application is ready to use.");
                    self::vendorHtaccess();
                    self::configEnv();
                } else {
                    Helper::time()
                        ::label("Philum")
                        ::font("blue", "", "bold")
                        ::exec("Please wait. Installing dependencies.");
                    Helper::exec("composer install", true);
                    Helper::time()
                        ::label("Philum")
                        ::font("green", "", "bold")
                        ::exec("Dependencies successfully installed.");
                    self::vendorHtaccess();
                    self::configEnv();
                }
            } else {
                if (file_exists($dependenciesFile)) {
                    Helper::time()
                        ::label("Philum")
                        ::font("blue", "", "bold")
                        ::exec("Update your dependencies.");
                    Helper::exec("composer update", true);
                    Helper::time()
                        ::label("Philum")
                        ::font("green", "", "bold")
                        ::exec("Updating dependencies successful.");
                    self::vendorHtaccess();
                    self::configEnv();
                } else {
                    Helper::time()
                        ::label("Philum")
                        ::font("red", "", "bold")
                        ::exec("Please install dependencies first with command 'php cli build'.");
                }
            }
        }

        public static function vendorHtaccess() {
            if (!file_exists('vendor/.htaccess')) {
                $code = <<<'HTACCESS'
                    <IfModule authz_core_module>
                        Require all denied
                    </IfModule>
                    <IfModule !authz_core_module>
                        Deny from all
                    </IfModule>
                    HTACCESS;
                
                file_put_contents('vendor/.htaccess', $code);
                Helper::time()
                    ::label("Philum")
                    ::font("green", "", "bold")
                    ::exec(".htaccess file created in vendor directory.");
            }
        }
    
        public static function configEnv() {
            if(!file_exists(".env")) {
                Helper::exec("cp .env.example .env", true);
                Helper::time()
                    ::label("Philum")
                    ::font("green", "", "bold")
                    ::exec(".env config file successfully created.");
            }
        }

    }
