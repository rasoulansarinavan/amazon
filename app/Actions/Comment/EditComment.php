<?php

declare(strict_types=1);

namespace App\Actions\Comment;

use App\Repositories\CommentRepository;

class EditComment
{
    public function __construct(
        private readonly CommentRepository $commentRepository,
    ) {
    }

    public function execute($formData, $commentId, $parent_id, $product_id): void
    {
        $this->commentRepository->editComment($formData, $commentId, $parent_id, $product_id);
    }
}
