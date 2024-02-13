<?php

namespace App\Actions\Admin;

use App\Repositories\AdminRepository;
use App\Repositories\FileRepository;
use Illuminate\Support\Facades\DB;

class CreateAdmin
{
    public function __construct(
        private readonly AdminRepository $adminRepository,
        private readonly FileRepository  $fileRepository,
    )
    {
    }

    public function execute($formData, $adminId, $image, $password): void
    {
        DB::transaction(function () use ($formData, $adminId, $image, $password) {
            $admin = $this->adminRepository->saveAdmin($formData, $adminId, $password);
            $this->fileRepository->saveAdminFile($admin->id, $image);
        });
    }
}
