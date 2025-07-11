<?php

namespace App\Livewire;

use Flux\Flux;
use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\Attributes\On;
use Livewire\WithFileUploads;

class EditPost extends Component
{
    use WithFileUploads;
    
    public $id;
    #[Rule("string|required|min:3|max:50")]
    public $title;
    #[Rule("string|required|min:3|max:255")]
    public $body;
    #[Rule("nullable|image|max:1024")] // Max 1MB   
    public $imagen;

    public $imagenForm;

    public function render()
    {
        return view('livewire.edit-post');
    }

    #[On('editarPost')]
    public function editarPost(Post $post)
    {
        // Aquí puedes manejar la lógica para editar el post
        // Por ejemplo, podrías abrir un modal con los datos del post
        // o redirigir a una página de edición.
        // En este caso, simplemente vamos a mostrar un mensaje.
        //dd('Editando post: ' . $post->id . ' - ' . $post->title);
        $this->id = $post->id;
        $this->title = $post->title;
        $this->body = $post->body;

        $this->imagenForm = $post->imagen; // Asignar la imagen actual al campo de imagen del formulario
        // Si quieres mostrar la imagen actual en el formulario, puedes usar:
        

        // Abrir el modal de edición
        // Aquí usamos Flux para mostrar el modal
        Flux::modal('editar-post-modal')->show();
    }

    public function actualizar(){
        $this->validate();

        $post = Post::find($this->id);

        $post->title = $this->title;
        $post->body = $this->body;
        if ($this->imagen) {
            $post->imagen = $this->imagen->store('posts');
        }

        $post->save();

        // Reset the form fields
        $this->reset(['id', 'title', 'body', 'imagen']);

        // Close the modal
        Flux::modal('editar-post-modal')->close();

        // Redirect or show a success message
        //session()->flash('message', 'Post actualizado correctamente.');
        $this->redirect("/posts", navigate: true);
        

    }
}
