<?php

    use RF\Router\Route;

    // Serve CSS files
    Route::get("/static/css/{path}", function ($path) {
        $filePath = realpath($_SERVER["DOCUMENT_ROOT"] . $_SERVER["CSS_PATH"] . $path);

        if (file_exists($filePath)) {
            header("Content-Type: text/css");
            readfile($filePath);
        } else {
            header("HTTP/1.0 404 Not Found");
            echo "CSS file not found.";
        }
    });

    // Serve JavaScript files
    Route::get("/static/js/{path}", function ($path) {
        $filePath = realpath($_SERVER["DOCUMENT_ROOT"] . $_SERVER["JS_PATH"] . $path);

        if (file_exists($filePath) && mime_content_type($filePath) === 'text/javascript') {
            header("Content-Type: text/javascript");
            readfile($filePath);
        } else {
            header("HTTP/1.0 404 Not Found");
            echo "JavaScript file not found.";
        }
    });

    // Serve media files
    Route::get("/static/media/{path}", function ($path) {
        $filePath = realpath($_SERVER["DOCUMENT_ROOT"] . $_SERVER["MEDIA_PATH"] . $path);

        if (file_exists($filePath)) {
            $mimeType = mime_content_type($filePath);
            header("Content-Type: $mimeType");
            readfile($filePath);
        } else {
            header("HTTP/1.0 404 Not Found");
            echo "Media file not found.";
        }
    });
