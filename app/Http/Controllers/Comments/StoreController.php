<?php

namespace App\Http\Controllers\Comments;

use App\Models\Comment;
use App\Http\Controllers\Controller;
use App\Http\Requests\Comments\StoreRequest;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        return Comment::create($request->all());
    }
}