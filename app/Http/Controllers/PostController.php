<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function firstAction(): string
    {
        return view('post');
    }
}
