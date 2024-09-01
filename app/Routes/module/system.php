<?php

    use RF\Router\Route;

    Route::group(["prefix" => "/static"], function() {

        Route::get("/css/{path}", function ($path) {
            $filePath = realpath($_SERVER["DOCUMENT_ROOT"] . $_SERVER["CSS_PATH"] . $path);

            if (!file_exists($filePath)) {
                header("location: /404");
                exit();
            }

            header("Content-Type: text/css");
            readfile($filePath);
        });

        Route::get("/js/{path}", function ($path) {
            $filePath = realpath($_SERVER["DOCUMENT_ROOT"] . $_SERVER["JS_PATH"] . $path);

            if (!file_exists($filePath)) {
                header("location: /404");
                exit();
            }
            
            header("Content-Type: text/javascript");
            readfile($filePath);
        });

        Route::get("/assets/{path}", function ($path) {
            $filePath = realpath($_SERVER["DOCUMENT_ROOT"] . $_SERVER["MEDIA_PATH"] . $path);

            if (!file_exists($filePath)) {
                header("location: /404");
                exit();
            }

            $mimeType = mime_content_type($filePath);
            header("Content-Type: $mimeType");
            readfile($filePath);
        });

    });
