<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class Projects extends Component
{
    public function render()
    {
        return view('livewire.projects', [
            'posts' => Post::where('is_verificate', true)->orderBy('id')->get(),
        ]);
    }
}
