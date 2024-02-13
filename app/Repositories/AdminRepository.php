<?php

namespace App\Repositories;

use App\Models\Admin;
use App\Models\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class AdminRepository
{
    public function findById(int $id)
    {
        return Admin::query()->where('id', $id)->first();
    }

    public function findFileById(int $id)
    {
        return File::query()->where(['type' => 'admin', 'service_id' => $id])->first();
    }

    public function updateById(int $id, array $data)
    {
        Admin::query()->where('id', $id)->update($data);
    }

    public function deleteById(int $id)
    {
        \Illuminate\Support\Facades\File::deleteDirectory(public_path('images/admins/' . $id));
        Admin::query()->where('id', $id)->delete();
        File::query()->where(['type' => 'admin', 'service_id' => $id])->delete();
    }

    public function saveAdmin($formData, $adminId, $password): Admin
    {
        $admin = Admin::query()->updateOrCreate(
            [
                'id' => $adminId
            ],
            [
                'name' => $formData['name'],
                'email' => $formData['email'],
                'mobile' => $formData['mobile'],
                'password' => $password,
                'block' => 0
            ]
        );
        return $admin;
    }
}
