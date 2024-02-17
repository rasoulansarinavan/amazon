<?php

namespace App\Actions\Comment;

use App\Repositories\CommentRepository;

class ShowComment
{
    public function __construct(
        private readonly CommentRepository $commentRepository,
    )
    {
    }

    public function execute($value)
    {
        $comment = $this->commentRepository->findById($value);

        if ($comment->status == 0) {
            $this->commentRepository->updateById($value, ['status' => 1]);
        } elseif ($comment->status == 1) {
            $this->commentRepository->updateById($value, ['status' => 0]);
        }
    }
}
