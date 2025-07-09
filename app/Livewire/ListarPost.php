<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Post;

class ListarPost extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.listar-post',[
            'posts' => Post::orderBy('created_at', 'desc')->paginate(2)
        ]);
    }
}
