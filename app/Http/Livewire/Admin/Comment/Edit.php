<?php

declare(strict_types=1);

namespace App\Http\Livewire\Admin\Comment;

use App\Actions\Comment\EditComment;
use App\Models\Comment;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Edit extends Component
{
    public $comment;
    public $body = '';
    public $commentId;

    public $product_id;
    public $parent_id;

    public function mount($id)
    {
        $comment = $this->comment = Comment::query()->where('id', $id)->firstOrFail();
        $this->commentId = $comment->id;
    }

    public function editComment($formData, Comment $comments, EditComment $action)
    {
        $validator = Validator::make(
            $formData,
            [
                'body' => 'required',
            ],
            [
                '*.required' => 'فیلد ضروری',
            ]
        );
        $parent_id = $this->comment->parent_id;
        $product_id = $this->comment->product_id;
        $validator->validate();
        $this->resetValidation();
        $action->execute($formData, $this->commentId, $parent_id, $product_id);
        $this->dispatchBrowserEvent('swal:alert-success');
        $this->redirect('/admin/comments');
    }

    public function render()
    {
        return view('livewire.admin.comment.edit')->layout('layouts.app-admin');
    }
}
