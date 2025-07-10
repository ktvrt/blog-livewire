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
    //#[Rule("nullable|image|max:1024")] // Max 1MB   
    public $imagen;

    public function submit(){

        $this->validate();
        //vamos a guarla imagen en la variable $imagen
        // si no hay imagen, se guarda null
        // si hay imagen, se guarda la ruta de la imagen
        // el método store() devuelve la ruta de la imagen almacenada
        // en el disco 'public' en la carpeta 'posts'
        // si no hay imagen, se guarda null
        // si hay imagen, se guarda la ruta de la imagen
        // se almacena la imagen en el disco 'public' en la carpeta 'posts'
        // y se guarda la ruta en la base de datos
        // si no hay imagen, se guarda null
        // si hay imagen, se guarda la ruta de la imagen
        // el método store() devuelve la ruta de la imagen almacenada
        // en el disco 'public' en la carpeta 'posts'
        // si no hay imagen, se guarda null
        
        $post = Post::create([
            'title' => $this->title,
            'body' => $this->body
        ]);

        if($this->imagen) {
            // Si se ha subido una imagen, la guardamos en el modelo
            $post->imagen = $this->imagen->store('posts', 'public');
            $post->save();
        }

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
