<?php

namespace App\Repositories;


use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

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

    public function saveAnswer($formData, $parent_id, $product_id, $answerId): Comment
    {
        $comment = Comment::query()->updateOrCreate(
            [
                'id' => $answerId
            ],
            [
                'body' => $formData['body'],
                'parent_id' => $parent_id,
                'product_id' => $product_id,
                'author_id' => 1
            ]
        );
        return $comment;
    }

    public function editComment($formData, $commentId, $parent_id, $product_id): comment
    {
        $comment = Comment::query()->updateOrCreate(
            [
                'id' => $commentId
            ],
            [
                'body' => $formData['body'],
                'parent_id' => $parent_id,
                'product_id' => $product_id,
                'author_id' => 1
            ]
        );
        return $comment;
    }
}
