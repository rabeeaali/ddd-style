<?php

namespace DD\Domain\Posts\Controllers;

use DD\App\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        return response()->json([
            'message' => 'Hello From DDD!',
        ]);
    }
}
