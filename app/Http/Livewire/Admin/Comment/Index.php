<?php

namespace App\Http\Livewire\Admin\Comment;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.comment.index')->layout('layouts.app-admin');
    }
}
