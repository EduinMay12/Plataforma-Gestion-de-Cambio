<?php

namespace App\Http\Livewire\ModuloDiagnosticos\Puestos;

use Livewire\Component;

use App\Models\ModuloDiagnosticos\Puesto;
use App\Models\ModuloDiagnosticos\Competencia;
use App\Models\ModuloDiagnosticos\Nivel;

class Edit extends Component
{

    public $puesto;

    public function mount(Puesto $puesto){
        $this->puesto = $puesto;
    }

    protected $rules = [
        'puesto.nombre' => 'required',
        'puesto.descripcion' => 'required',
        'puesto.reporta_a' => 'required',
        'puesto.estatus' => 'required'
    ];

    public function save(){
        $this->validate();

        $this->puesto->save();

        $this->emit('alert', '¡El puesto se actualizó con exito!');
        
    }
    public function render()
    {
        $puestos = Puesto::all();
        $competencias = Competencia::all();
        $niveles = Nivel::all();
        return view('livewire.modulo-diagnosticos.puestos.edit', compact('puestos', 'competencias', 'niveles'));
    }
}
