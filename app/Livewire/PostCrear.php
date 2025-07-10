<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Rule;
use App\Models\Post;
use Livewire\WithFileUploads;
use Flux;

class PostCrear extends Component
{
    use WithFileUploads;

    #[Rule("string|required|min:3|max:50")]
    public $title;
    #[Rule("string|required|min:3|max:255")]
    public $body;
    #[Rule("nullable|image|max:1024")] // Max 1MB   
    public $imagen;

    public function submit(){

        $this->validate();
        Post::create([
            'title' => $this->title,
            'body' => $this->body,
            'image' => $this->imagen ? $this->imagen->store('posts', 'public') : null
        ]);

        //session()->flash('message', 'Post creado correctamente.');
        
        // Reset the form fields
        $this->reset(['title', 'body', 'imagen']);

        Flux::modal('crer-post-modal')->close();
        //$this->resetPage();
         $this->redirect("/posts",navigate: true);
    }

    public function render()
    {
        return view('livewire.post-crear');
    }
}
