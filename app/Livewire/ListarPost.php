<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Post;

class ListarPost extends Component
{
    use WithPagination;

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
}
