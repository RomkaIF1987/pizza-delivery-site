<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentTableRequest;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CommentTableRequest $request)
    {
        $params = $request->validated();

        $comment = Comment::create($params);

        return back();
    }
}
