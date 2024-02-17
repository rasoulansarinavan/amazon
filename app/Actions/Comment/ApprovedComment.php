<?php

namespace App\Actions\Comment;


use App\Repositories\CommentRepository;

class ApprovedComment
{
    public function __construct(
        private readonly CommentRepository $commentRepository,
    )
    {
    }

    public function execute($value)
    {
        $comment = $this->commentRepository->findById($value);

        if ($comment->approved == 0) {
            $this->commentRepository->updateById($value, ['approved' => 1]);
        } elseif ($comment->approved == 1) {
            $this->commentRepository->updateById($value, ['approved' => 0]);
        }
    }
}
