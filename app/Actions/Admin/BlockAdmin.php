<?php

namespace App\Actions\Admin;

use App\Repositories\AdminRepository;

class BlockAdmin
{
    public function __construct(
        private readonly AdminRepository $adminRepository
    )
    {
    }

    public function execute($value)
    {
        $admin = $this->adminRepository->findById($value);

        if ($admin->block == 0) {
            $this->adminRepository->updateById($value, ['block' => 1]);
        } elseif ($admin->block == 1) {
            $this->adminRepository->updateById($value, ['block' => 0]);
        }
    }
}
