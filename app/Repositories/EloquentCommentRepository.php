<?php

namespace App\Repositories;

use App\Models\Comment;

class EloquentCommentRepository implements CommentRepository
{
    public function save($data)
    {
        $comment = new Comment;
        $comment->post_id = $data->post_id;
        $comment->name = $data->name;
        $comment->email = $data->email;
        $comment->website = $data->website;
        $comment->comment = $data->comment;
        $comment->is_guest = $data->is_guest;
        $comment->save();
    }

    public function getByEmail($email)
    {
        return Comment::with('post')->where('email', $email)->get();
    }
}