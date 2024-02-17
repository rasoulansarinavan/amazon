<?php

namespace App\Http\Livewire\Admin\Comment;

use App\Actions\Comment\ApprovedComment;
use App\Actions\Comment\ShowComment;
use App\Models\Comment;
use Livewire\Component;

class Index extends Component
{
    public function approved($value, ApprovedComment $approvedComment)
    {
        $approvedComment->execute($value);
        $this->dispatchBrowserEvent('swal:alert-success');
    }

    public function show($value,ShowComment $showComment)
    {
        $showComment->execute($value);
        $this->dispatchBrowserEvent('swal:alert-success');
    }

    public function render()
    {
        $comments = Comment::query()->get();
        return view('livewire.admin.comment.index', compact('comments'))->layout('layouts.app-admin');
    }
}
