<?php

namespace LegendsRising\Http\Controllers;

use LegendsRising\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::recent()->with('user')->get();

        return $news;
    }

    public function show($id)
    {
        return News::with('user', 'comments.user')->find($id);
    }
}
