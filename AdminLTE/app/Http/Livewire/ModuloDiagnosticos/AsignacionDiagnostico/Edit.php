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

        $this->emit('alert', '¡La asignación diagnóstico se actualizó con exito!');
    }

    public function render()
    {
        $users = User::all()->where('estatus', '=', '4');
        $users1 = User::all()->where('estatus', '=', '2');
        $puestos = Puesto::all()->where('estatus', '=', '1');
        $rolesdiagnosticos = RoleDiagnostico::all()->where('estatus', '=', '1');
        return view('livewire.modulo-diagnosticos.asignacion-diagnostico.edit', compact('users', 'puestos', 'rolesdiagnosticos', 'users1'));
    }
}
