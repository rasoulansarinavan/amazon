<?php

declare(strict_types=1);

namespace App\Http\Livewire\Admin\Comment;

use App\Actions\Comment\AnswerComment;
use App\Models\Comment;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Answer extends Component
{
    public $comment;
    public $body = '';
    public $answerId;

    public function mount($id)
    {
        $this->comment = Comment::query()->where('id', $id)->firstOrFail();
    }

    public function answer($formData, Comment $comments, AnswerComment $action)
    {
        $validator = Validator::make(
            $formData,
            [
                'body' => 'required',
            ],
            [
                'required' => 'فیلد اجباری است.',
            ]
        );
        $parent_id = $this->comment->id;
        $product_id = $this->comment->product_id;
        $validator->validate();
        $this->resetValidation();
        $action->execute($formData, $parent_id, $product_id, $this->answerId);
        $this->dispatchBrowserEvent('swal:alert-success');
        $this->redirect('/admin/comments');
    }

    public function render()
    {
        return view('livewire.admin.comment.answer')->layout('layouts.app-admin');
    }
}
