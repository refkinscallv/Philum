<?php

    $dependencies = "vendor/autoload.php";

    if(file_exists($dependencies)) {

        /**
         * Load dependencies
         */
        require $dependencies;
        
        /**
         * Booting the application
         */
        \Philum\Boot::run();

    } else {

        /**
         * Default page if no dependency directory exists
         */
        require "system/default.php";
        
        Philum\DefaultPage::set();
        
    }
