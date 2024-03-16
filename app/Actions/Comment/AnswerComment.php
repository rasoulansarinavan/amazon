<?php

declare(strict_types=1);

namespace App\Actions\Comment;

use App\Repositories\CommentRepository;

class AnswerComment
{
    public function __construct(
        private readonly CommentRepository $commentRepository,
    ) {
    }

    public function execute($formData, $parent_id, $product_id, $answerId): void
    {
        $this->commentRepository->saveAnswer($formData, $parent_id, $product_id, $answerId);
    }
}
