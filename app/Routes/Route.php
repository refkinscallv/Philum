<?php

    use RF\Router\Route;

    Route::register([
        __DIR__ ."/module/system"
    ]);
    Route::set404([Philum\App\Controllers\Page::class, 'page404']);

    Route::get("",  [Philum\App\Controllers\Welcome::class, 'index']);
