<?php

use Illuminate\Support\Facades\Route;
use DD\Domain\Posts\Controllers\PostController;


Route::get('posts/index', [PostController::class, 'index']);
