<?php

namespace App\Http\Livewire\ModuloCapacitaciones\Grupos;

use Livewire\Component;
use App\Models\ModuloCapacitaciones\Grupo;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends Component
{
    use WithFileUploads;
    use WithPagination;

    //variables para filtro
    
    public function render()
    {
        return view('livewire.modulo-capacitaciones.grupos.index');
    }
}
