<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Post;
use Flux;
use Illuminate\Support\Facades\Storage;

class ListarPost extends Component
{
    use WithPagination;

    public $id;
    public $buscador;

    // Gancho de ciclo de vida
    // cuando se actualiza el valor de la propiedad $buscador, se ejecuta este método
    // se usa para resetear la paginación a la primera página
    // se ejecuta cada vez que se actualiza el valor de $buscador
    public function updatingBuscador()
    {        
        $this->resetPage();
    }

    public function render()
    {
        //dd('Actualizando busqueda: ' . $this->buscador);
        return view('livewire.listar-post',[
            'posts' => Post::latest()->where("title","LIKE", "%{$this->buscador}%")
                    ->orWhere("body","LIKE", "%{$this->buscador}%")->paginate(5)  
        ]);
    }

    public function editar(Post $post)
    {        
        //dd('Editando post: ' . $post->id . ' - ' . $post->title);

        // enviamos el post al componente EditPost
        //hacemos uso de la funcionalidad de Flux para enviar un evento
        // que será escuchado por el componente EditPost
        // y así poder editar el post seleccionado        
        $this->dispatch('editarPost', $post);
    }

    public function eliminar(Post $post)
    {
        $this->id = $post->id;
        Flux::modal('eliminar-post-modal')->show();
        //dd('Eliminando post: ' . $post->id . ' - ' . $post->title);
        // eliminamos el post
        //$post->delete();
        // mostramos un mensaje de éxito
        //session()->flash('message', 'Post eliminado correctamente.');
    }

    public function destruir()
    {
        //dd('Destruyendo post: ' . $this->id);
        $post = Post::find($this->id);
        if ($post) {
            $post->delete();
            // mostramos un mensaje de éxito
            session()->flash('message', 'Post eliminado correctamente.');
            //eliminar la imagen del disco
            if ($post->imagen) {
                Storage::delete($post->imagen);
                //Storage::disk('public')->delete($post->imagen);
            }
        } else {
            session()->flash('error', 'Post no encontrado.');
        }

        $this->resetPage();
        $this->reset(['id', 'buscador']);
        Flux::modal('eliminar-post-modal')->close();
    }
}
