<?php

namespace App\Http\Livewire\ModuloDiagnosticos\Niveles;

use Livewire\Component;

use App\Models\ModuloDiagnosticos\Nivel;

class Create extends Component
{

    public $nombre;

    protected $rules = [
        'nombre' => 'required'
    ];

    public function save(){

        $this->validate();

        Nivel::create([
            'nombre' => $this->nombre
        ]);

        $this->reset(['nombre']);

        $this->emit('alert', '¡Se agregó el nivel con exito!');
    }

    public function render()
    {

        $niveles = Nivel::all();

        return view('livewire.modulo-diagnosticos.niveles.create', compact('niveles'));
    }
}
