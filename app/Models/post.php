<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class post extends Model
{
    protected $fillable = ['title', 'body', 'imagen'];

    //metodo para obtener la ruta de la imagen
    public function getImagen($imagen)
    {
        if ($imagen) {
            return Storage::url($imagen);
        }
        return Storage::url(config('filesystems.IMAGEN_DEFAULT'));

    }
}
