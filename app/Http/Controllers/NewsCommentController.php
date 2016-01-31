<?php

namespace LegendsRising\Http\Controllers;

use LegendsRising\Models\Comment;

class NewsCommentController extends Controller
{
    public function index($newsId)
    {
        $comments = Comment::recent()->with('user')->where('news_id', $newsId)->get();

        return $comments;
    }
}
