<?php

namespace App\Http\Livewire\ModuloDiagnosticos\AsignacionDiagnostico;

use Livewire\Component;

use App\Models\ModuloDiagnosticos\AsignacionDiagnostico;

use App\Models\User;
use App\Models\ModuloDiagnosticos\Puesto;
use App\Models\ModuloDiagnosticos\RoleDiagnostico;

class Create extends Component
{
    public $user_id, $puesto_actual, $puesto_futuro, $reporta_a;
    public $evaluador = 'null';
    public $rol_diagnostico;

    public function save(){
        $this->validate(
            [
                'user_id' => 'required',
                'puesto_actual' => 'required',
                'puesto_futuro' => 'required',
                'evaluador' => 'required',
                'rol_diagnostico' => 'required',
                'reporta_a' => 'required'
            ],
            [
                'user_id.required' => 'El campo persona participante es requerido',
                'puesto_actual.required' => 'El campo puesto actual es requerido',
                'puesto_futuro.required' => 'El campo puesto futuro es requerido',
                'evaluador.required' => 'El campo persona evaluador es requerido',
                'rol_diagnostico.required' => 'El campo rol dignóstico es requerido',
                'reporta_a.required' => 'El campo reporta_a es requerido'
            ]
        );

        if($this->rol_diagnostico == 'Auto-evaluación'){
            AsignacionDiagnostico::create([
                'user_id' => $this->user_id,
                'puesto_actual' => $this->puesto_actual,
                'puesto_futuro' => $this->puesto_futuro,
                'rol_diagnostico' => $this->rol_diagnostico,
                'evaluador' => $this->evaluador,
                'reporta_a' => $this->reporta_a    
        ]);

        $this->reset(['user_id', 'puesto_actual', 'puesto_futuro', 'evaluador', 'rol_diagnostico', 'reporta_a']);

        $this->emit('alert', '¡Se agregó la asignación diagnóstico con exito!');
        }else if($this->rol_diagnostico == 'Evaluador'){
            AsignacionDiagnostico::create([
                'user_id' => $this->user_id,
                'puesto_actual' => $this->puesto_actual,
                'puesto_futuro' => $this->puesto_futuro,
                'rol_diagnostico' => $this->rol_diagnostico,
                'evaluador' => $this->evaluador,
                'reporta_a' => $this->reporta_a    
        ]);

        $this->reset(['user_id', 'puesto_actual', 'puesto_futuro', 'evaluador', 'rol_diagnostico', 'reporta_a']);

        $this->emit('alert', '¡Se agregó la asignación diagnóstico con exito!'); 
        }else{
            $this->emit('alert', 'Ha sucedido algo inesperado');
        }


        /*
        AsignacionDiagnostico::create([
            'user_id' => $this->user_id,
            'puesto_actual' => $this->puesto_actual,
            'puesto_futuro' => $this->puesto_futuro,
            'evaluador' => $this->evaluador,
            'rol_diagnostico' => $this->rol_diagnostico,
            'reporta_a' => $this->reporta_a
        ]);

        $this->reset(['user_id', 'puesto_actual', 'puesto_futuro', 'evaluador', 'rol_diagnostico', 'reporta_a']);

        $this->emit('alert', '¡Se agregó la asignación diagnóstico con exito!');
    */
    }
    public function render()
    {
        $users = User::all()->where('estatus', '=', '4');
        $users1 = User::all()->where('estatus', '=', '2');
        $puestos = Puesto::all()->where('estatus', '=', '1');
        $rolesdiagnosticos = RoleDiagnostico::all()->where('estatus', '=', '1');
        return view('livewire.modulo-diagnosticos.asignacion-diagnostico.create', compact('users', 'puestos', 'rolesdiagnosticos', 'users1'));
    }
}
