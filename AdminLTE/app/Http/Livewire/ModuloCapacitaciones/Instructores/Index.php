<?php

namespace App\Http\Livewire\ModuloCapacitaciones\Instructores;

use Livewire\Component;
use App\Models\ModuloCapacitaciones\Instructore;

class Index extends Component
{
    public $search = '';
    public $sort = 'id';
    public $direction = 'desc';
    
    public function render()
    {
        $instructores = Instructore::all();
        return view('livewire.modulo-capacitaciones.instructores.index', compact('instructores'));
    }
}
