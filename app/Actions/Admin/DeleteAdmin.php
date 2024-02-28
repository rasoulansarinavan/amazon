<?php

declare(strict_types=1);

namespace App\Actions\Admin;

use App\Repositories\AdminRepository;

class DeleteAdmin
{
    public function __construct(
        private readonly AdminRepository $adminRepository
    ) {
    }

    public function execute($value)
    {
        $this->adminRepository->deleteById($value);
    }
}
