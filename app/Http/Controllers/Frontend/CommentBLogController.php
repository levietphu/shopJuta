<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use App\Models\CommentBlog;

class CommentBLogController extends Controller
{
    public function comment_blog(Request $req)
    {
        $comment = new CommentBlog;
        $comment->id_user = Auth::user()->id;
        $comment->id_blog = $req->id_blog;
        $comment->content = $req->content;
        $comment->save();
        return response()->json(['success'=>'Added new records.']);
    }
}
