<?php

namespace App\Http\Controllers\Comments;

use App\Models\Comment;
use App\Http\Controllers\Controller;
use App\Requests\Comments\UpdateRequest;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Comment $comment)
    {
        $comment->update($request->all());

        return $comment;
    }
}