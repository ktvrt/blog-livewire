<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Rule;
use App\Models\Post;
use Flux;

class PostCrear extends Component
{
    #[Rule("string|required|min:3|max:50")]
    public $title;
    #[Rule("string|required|min:3|max:255")]
    public $body;
    
    public $imagen;

    public function submit(){

        $this->validate();
        Post::create([
            'title' => $this->title,
            'body' => $this->body,
            'imagen' => $this->imagen,
        ]);

        //session()->flash('message', 'Post creado correctamente.');
        
        // Reset the form fields
        $this->reset(['title', 'body', 'imagen']);

        Flux::modal('crer-post-modal')->close();
    }

    public function render()
    {
        return view('livewire.post-crear');
    }
}
