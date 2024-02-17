<?php

namespace App\Http\Livewire\Admin\Comment;

use App\Models\Comment;
use Livewire\Component;

class Answer extends Component
{
    public $comment;

    public function mount($id)
    {
        $this->comment = Comment::query()->where('id', $id)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.admin.comment.answer')->layout('layouts.app-admin');
    }
}
