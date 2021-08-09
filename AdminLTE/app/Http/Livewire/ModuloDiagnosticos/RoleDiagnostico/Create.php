<?php

namespace App\Http\Livewire\ModuloDiagnosticos\RoleDiagnostico;

use Livewire\Component;

use App\Models\ModuloDiagnosticos\RoleDiagnostico;

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

        RoleDiagnostico::create([
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'estatus' => $this->estatus
        ]);

        $this->reset(['nombre', 'descripcion', 'estatus']);

        $this->emit('alert', '¡Se agregó el rol evaluación con exito!');
    }
    public function render()
    {
        return view('livewire.modulo-diagnosticos.role-diagnostico.create');
    }
}
