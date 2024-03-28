<?php

namespace App\Http\Livewire\Client\Home;

use App\Models\Category;
use Livewire\Component;

class Index extends Component
{
    public function mount()
    {
        $this->banner = \App\Models\Banner::query()->with('image')->get();
        $this->categories = Category::query()->with('image')->get();
    }

    public function render()
    {
        return view('livewire.client.home.index')->layout('layouts.app');
    }
}
