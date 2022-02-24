<?php

namespace App\Http\Controllers\Comments;

use App\Models\Comment;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        return array_values(
            Comment::with('childs', 'childs.childs', 'user', 'childs.user', 'childs.childs.user')->get()->filter(function($comment){
                return !$comment->parent_id;
            })->toArray()
        );
    }
}
