<?php

namespace App\Http\Livewire\Admin\Category;

use Livewire\Component;


class Create extends Component
{
    public function render()
    {
        return view('livewire.admin.category.create')->layout('layouts.app-admin');
    }
}
