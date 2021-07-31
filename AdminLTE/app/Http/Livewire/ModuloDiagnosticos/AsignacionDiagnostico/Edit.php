<?php

namespace App\Http\Livewire\ModuloDiagnosticos\AsignacionDiagnostico;

use Livewire\Component;

use App\Models\ModuloDiagnosticos\AsignacionDiagnostico;

use App\Models\User;
use App\Models\ModuloDiagnosticos\Puesto;
use App\Models\ModuloDiagnosticos\RoleDiagnostico;

class Edit extends Component
{

    public $asignaciondiagnostico;

    public function mount(AsignacionDiagnostico $asignaciondiagnostico){
        $this->asignaciondiagnostico = $asignaciondiagnostico;
    }

    protected $rules = [
        'asignaciondiagnostico.user_id' => 'required',
        'asignaciondiagnostico.puesto_actual' => 'required',
        'asignaciondiagnostico.puesto_futuro' => 'required',
        'asignaciondiagnostico.evaluador' => 'required',
        'asignaciondiagnostico.rol_diagnostico' => 'required',
        'asignaciondiagnostico.reporta_a' => 'required'
    ];

    public function save(){
        $this->validate();

        $this->asignaciondiagnostico->save();

        $this->emit('alert', '¡La asignacion diagnostico se actualizó con exito!');
    }

    public function render()
    {
        $users = User::all();
        $puestos = Puesto::all();
        $rolesdiagnosticos = RoleDiagnostico::all();
        return view('livewire.modulo-diagnosticos.asignacion-diagnostico.edit', compact('users', 'puestos', 'rolesdiagnosticos'));
    }
}
