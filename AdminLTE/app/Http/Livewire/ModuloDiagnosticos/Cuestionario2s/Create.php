<?php

namespace App\Http\Livewire\ModuloDiagnosticos\Cuestionario2s;

use Livewire\Component;

use App\Models\ModuloDiagnosticos\Cuestionario2;

class Create extends Component
{

    public $nombre, $descripcion, $estatus;

    protected $rules = [
        'nombre' => 'required',
        'descripcion' => 'required',
        'estatus' => 'required'
    ];

    public function save(){
        $this->validate();

        Cuestionario2::create([
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'estatus' => $this->estatus
        ]);

        $this->reset(['nombre', 'descripcion', 'estatus']);

        $this->emit('alert', '¡Se agregó el cuestionario con exito!');
    }
    public function render()
    {
        return view('livewire.modulo-diagnosticos.cuestionario2s.create');
    }
}
