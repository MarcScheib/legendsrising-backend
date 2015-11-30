<?php
namespace LegendsRising\Http\Controllers;

use LegendsRising\Http\Requests;
use LegendsRising\Models\News;
use Log;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::recent()->with('user')->get();

        return $news;
    }

    public function show($id)
    {
        return News::with('user')->find($id);
    }
}
