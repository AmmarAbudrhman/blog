<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(): View
    {
        $posts = [
            ['id' => 1, 'title' => 'Welcome to the blog', 'author' => 'Ammar Bawaizr', 'created_at' => '2025-12-01 10:15:00'],
            ['id' => 2, 'title' => 'Laravel tips', 'author' => 'Jane Doe', 'created_at' => '2025-12-05 09:00:00'],
            ['id' => 3, 'title' => 'Upcoming features', 'author' => 'John Smith', 'created_at' => '2025-12-08 14:30:00'],
        ];

        return view('posts.index', data: compact('posts'));
    }
    public function show($id): View
    {
        $posts = [
            1 => ['id' => 1, 'title' => 'Welcome to the blog', 'author' => 'Ammar Bawaizr', 'created_at' => '2025-12-01 10:15:00', 'content' => 'This is the content of the first post.'],
            2 => ['id' => 2, 'title' => 'Laravel tips', 'author' => 'Jane Doe', 'created_at' => '2025-12-05 09:00:00', 'content' => 'This is the content of the second post.'],
            3 => ['id' => 3, 'title' => 'Upcoming features', 'author' => 'John Smith', 'created_at' => '2025-12-08 14:30:00', 'content' => 'This is the content of the third post.'],
        ];

        if (!array_key_exists($id, $posts)) {
            abort(404);
        }

        $post = $posts[$id];

        return view('posts.show', compact('post'));
    }
}
