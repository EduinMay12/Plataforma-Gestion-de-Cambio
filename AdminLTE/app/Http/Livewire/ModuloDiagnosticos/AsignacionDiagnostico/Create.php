<?php

namespace App\Http\Livewire\ModuloDiagnosticos\AsignacionDiagnostico;

use Livewire\Component;

use App\Models\ModuloDiagnosticos\AsignacionDiagnostico;

use App\Models\User;
use App\Models\ModuloDiagnosticos\Puesto;
use App\Models\ModuloDiagnosticos\RoleDiagnostico;

class Create extends Component
{
    public $user_id, $puesto_actual, $puesto_futuro, $evaluador, $rol_diagnostico, $reporta_a;

    protected $rules = [
        'user_id' => 'required',
        'puesto_actual' => 'required',
        'puesto_futuro' => 'required',
        'evaluador' => 'required',
        'rol_diagnostico' => 'required',
        'reporta_a' => 'required'
    ];

    public function save(){
        $this->validate();

        AsignacionDiagnostico::create([
            'user_id' => $this->user_id,
            'puesto_actual' => $this->puesto_actual,
            'puesto_futuro' => $this->puesto_futuro,
            'evaluador' => $this->evaluador,
            'rol_diagnostico' => $this->rol_diagnostico,
            'reporta_a' => $this->reporta_a
        ]);

        $this->reset(['user_id', 'puesto_actual', 'puesto_futuro', 'evaluador', 'rol_diagnostico', 'reporta_a']);

        $this->emit('alert', '¡Se agregó la asignacion diagnostico con exito!');
    }
    public function render()
    {
        $users = User::all();
        $puestos = Puesto::all();
        $rolesdiagnosticos = RoleDiagnostico::all();
        return view('livewire.modulo-diagnosticos.asignacion-diagnostico.create', compact('users', 'puestos', 'rolesdiagnosticos'));
    }
}
