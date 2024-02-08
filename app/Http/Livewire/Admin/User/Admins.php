<?php

namespace App\Http\Livewire\Admin\User;

use Livewire\Component;

class Admins extends Component
{
    public function render()
    {
        return view('livewire.admin.user.admins')->layout('layouts.app-admin');
    }
}
