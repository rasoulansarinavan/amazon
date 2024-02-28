<?php

declare(strict_types=1);

namespace App\Actions\Comment;

use App\Repositories\CommentRepository;

class DeleteComment
{
    public function __construct(
        private readonly CommentRepository $commentRepository
    ) {
    }

    public function execute($value)
    {
        $this->commentRepository->DeleteById($value);
    }
}
