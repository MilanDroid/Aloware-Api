<?php

namespace App\Http\Controllers\Comments;

use App\Models\Comment;
use App\Http\Controllers\Controller;

class DestroyController extends Controller
{
    public function __invoke(Comment $comment)
    {
        $comment->delete();
        return 204;
    }
}