<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $posts = News::orderBy('id', 'desc')->paginate(20);
        return view('news.index', compact('posts'));
    }

    public function show($id)
    {
        $post = News::findOrFail($id);
        return view('news.show', compact('post'));
    }
}
