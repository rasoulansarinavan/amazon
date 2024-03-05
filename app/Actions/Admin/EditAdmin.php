<?php

declare(strict_types=1);

namespace App\Actions\Admin;

use App\Repositories\AdminRepository;

class EditAdmin
{
    public function __construct(
        private readonly AdminRepository $adminRepository
    ) {
    }
    public $file,$image,$oldPhoto,$name,$email,$mobile,$password,$adminId;
    public function execute($value): void
    {
        $admin = $this->adminRepository->findById($value);
        $image = $this->adminRepository->findFileById($value);

        @$this->image = $image->file;
        @$this->oldPhoto = $image->file;


        $this->name = $admin->name;
        $this->email = $admin->email;
        $this->mobile = $admin->mobile;
        $this->password = $admin->password;
        $this->adminId = $admin->id;
    }
}
