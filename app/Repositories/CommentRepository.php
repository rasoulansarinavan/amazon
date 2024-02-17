<?php

namespace App\Repositories;


use App\Models\Comment;

class CommentRepository
{
    public function findById(int $id)
    {
        return Comment::query()->where('id', $id)->first();
    }

    public function updateById(int $id, array $data)
    {
        Comment::query()->where('id', $id)->update($data);
    }

    public function DeleteById(int $id)
    {
        Comment::query()->where('id', $id)->delete();
    }
}
