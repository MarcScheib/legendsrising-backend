<?php

namespace LegendsRising\Http\Controllers;

use LegendsRising\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::recent()->with('user')->paginate(5);

        return $news;
    }

    public function show($id)
    {
        return News::with('user')->find($id);
    }
}
