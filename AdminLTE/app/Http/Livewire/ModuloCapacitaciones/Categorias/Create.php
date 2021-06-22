<?php

namespace App\Http\Livewire\ModuloCapacitaciones\Categorias;

use Livewire\Component;

class Create extends Component
{
    public $nombre, $descripcion, $imagen, $status;
    public $contador = 0;

    public function render()
    {
        return view('livewire.modulo-capacitaciones.categorias.create');
    }
}
