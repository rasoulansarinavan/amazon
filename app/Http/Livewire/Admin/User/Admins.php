<?php

declare(strict_types=1);

namespace App\Http\Livewire\Admin\User;

use App\Actions\Admin\BlockAdmin;
use App\Actions\Admin\CreateAdmin;
use App\Actions\Admin\DeleteAdmin;
use App\Actions\Admin\EditAdmin;
use App\Models\Admin;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class Admins extends Component
{
    use WithFileUploads;

    protected $listeners = ['delete'];

    public $name;
    public $email;
    public $mobile;
    public $image;
    public $adminId;
    public $password;
    public $fileExtension;
    public $extensions = ['jpeg', 'jpg', 'png', 'gif'];
    public $oldPhoto = '';

    public function generatePassword()
    {
        do {
            $randomCode = Str::password(10);
            $checkCode = Admin::query()->where('password', $randomCode)->first();
        } while ($checkCode);

        $this->password = $randomCode;
        return $randomCode;
    }

    public function updatedImage()
    {
        $this->oldPhoto = '';
        $this->fileExtension = $this->image->getClientOriginalExtension();
        $this->validate([
            'image' => 'image|mimes:jpeg,jpg,png,gif,webp|max:1024', // 1MB Max
        ], [
            'image.required' => 'فیلد ضروری',
            'image.max' => 'حداکثر حجم تصویر : 1MB',
            'image.dimensions' => 'ایعاد تصاویر باید w:500 , h:500 px باشد',
            'image.image' => 'پسوندهای قابل قبول: jpeg ,jpg , png , gif',
        ]);

    }

    public function saveAdmin($formData, Admin $admins, CreateAdmin $action)
    {

        $validator = Validator::make($formData, [
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',

        ], [
            '*.required' => 'فیلد ضروری',
            '*.unique' => 'این فیلد باید منحصر به فرد باشد',
        ]);

        if (!$this->oldPhoto) {
            $this->validate([
                'image' => 'image|mimes:jpeg,jpg,png,gif,webp|max:1024', // 1MB Max', // 1MB Max
            ], [
                'image.required' => 'فیلد ضروری',
                'image.max' => 'حداکثر حجم تصویر : 1MB',
                'image.dimensions' => 'ایعاد تصاویر باید w:500 , h:500 px باشد',
                'image.image' => 'پسوندهای قابل قبول: jpeg ,jpg , png , gif',

            ]);
        }

        $image = $this->image;
        $validator->validate();
        $this->resetValidation();
        $action->execute($formData, $this->adminId, $image, $this->password);
        $this->dispatchBrowserEvent('swal:alert-success');

        $this->name = '';
        $this->email = '';
        $this->mobile = '';
        $this->adminId = '';
        $this->image = '';

        $this->redirect('/admin/admins');
    }

    public function editAdmin($value, EditAdmin $editAdmin)
    {
        $editAdmin->execute($value);

        @$this->image = $editAdmin->file;
        @$this->oldPhoto = $editAdmin->file;

        $this->name = $editAdmin->name;
        $this->email = $editAdmin->email;
        $this->mobile = $editAdmin->mobile;
        $this->password = $editAdmin->password;
        $this->adminId = $editAdmin->adminId;

    }

    public function deleteConfirm($id)
    {
        $this->dispatchBrowserEvent('swal:confirm', [
            'id' => $id,
        ]);
    }

    public function delete($value, DeleteAdmin $deleteAdmin)
    {
        $deleteAdmin->execute($value);
        $this->dispatchBrowserEvent('swal:alert-success');
        $this->redirect('/admin/admins');
    }

    public function blockAdmin($value, BlockAdmin $blockAdmin)
    {
        $blockAdmin->execute($value);
        $this->dispatchBrowserEvent('swal:alert-success');
    }

    public function render()
    {
        $admins = Admin::query()->get();
        return view('livewire.admin.user.admins', compact('admins'))->layout('layouts.app-admin');
    }
}
