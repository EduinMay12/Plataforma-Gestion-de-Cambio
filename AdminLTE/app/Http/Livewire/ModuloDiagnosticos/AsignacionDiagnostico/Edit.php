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
    public $user_id, $puesto_actual, $puesto_futuro, $rol_diagnostico, $reporta_a;

    public $evaluador;

    public function mount(AsignacionDiagnostico $asignaciondiagnostico){
        $this->asignaciondiagnostico = $asignaciondiagnostico;
        $this->user_id = $asignaciondiagnostico->user_id;
        $this->puesto_actual = $asignaciondiagnostico->puesto_actual;
        $this->puesto_futuro = $asignaciondiagnostico->puesto_futuro;
        $this->evaluador = $asignaciondiagnostico->evaluador;
        $this->rol_diagnostico = $asignaciondiagnostico->rol_diagnostico;
        $this->reporta_a = $asignaciondiagnostico->reporta_a;
    }

    public function save(AsignacionDiagnostico $asignacion){
        //$this->emit('alert', 'El id es: ' . $asignacion->id);

        $actualizar = AsignacionDiagnostico::find($asignacion->id);


            $actualizar->user_id = $this->user_id;
            $actualizar->puesto_actual = $this->puesto_actual;
            $actualizar->puesto_futuro = $this->puesto_futuro;
            $actualizar->evaluador = $this->evaluador;
            $actualizar->rol_diagnostico = $this->rol_diagnostico;
            $actualizar->reporta_a = $this->reporta_a;
            $actualizar->save();
        


        /*$this->validate(
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
        );*/

        //$this->asignaciondiagnostico->save();

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
