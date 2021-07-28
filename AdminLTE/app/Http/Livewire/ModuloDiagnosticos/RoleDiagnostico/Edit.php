<?php

namespace App\Http\Livewire\ModuloDiagnosticos\RoleDiagnostico;

use Livewire\Component;

use App\Models\ModuloDiagnosticos\RoleDiagnostico;

class Edit extends Component
{

    public $roldiagnostico;

    public function mount(RoleDiagnostico $roldiagnostico){
        $this->roldiagnostico = $roldiagnostico;
    }

    protected $rules = [
        'roldiagnostico.nombre' => 'required',
        'roldiagnostico.descripcion' => 'required',
        'roldiagnostico.estatus' => 'required' 
    ];

    public function save(){
        $this->validate();

        $this->roldiagnostico->save();

       $this->emit('alert', 'El rol diagnostico se actualizó con exito'); 
    }
    public function render()
    {
        return view('livewire.modulo-diagnosticos.role-diagnostico.edit');
    }
}
