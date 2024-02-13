<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $users = User::query()->get();
        return view('livewire.admin.user.index',compact('users'))->layout('layouts.app-admin');
    }
}
