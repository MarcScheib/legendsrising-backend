<?php

namespace LegendsRising\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use LegendsRising\Models\Comment;

class NewsCommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('jwt.auth', ['except' => ['index']]);
    }

    public function index($newsId)
    {
        $comments = Comment::recent()->with('user')->where('news_id', $newsId)->get();

        return $comments->reverse()->values();
    }

    public function store($newsId, Request $request)
    {
        $this->validate($request, [
            'text' => 'required',
        ]);

        $user = Auth::user();
        $comment = new Comment();
        $comment->news_id = $newsId;
        $comment->user_id = $user->id;
        $comment->text = $request->text;
        $comment->save();

        $comment->user = $user;

        return $comment;
    }
}
