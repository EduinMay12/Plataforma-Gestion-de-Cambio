<?php

namespace App\Http\Livewire\ModuloDiagnosticos\AsignacionDiagnostico;

use Livewire\Component;

use App\Models\ModuloDiagnosticos\AsignacionDiagnostico;
use App\Models\User;
use App\Models\ModuloDiagnosticos\RoleDiagnostico;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;

    public $asignaciondiagnostico;
    public $asignaciondiagnostico_id;

    public $search = '', $sort = 'id', $direction = 'desc',
            $cant = '5';

    protected $paginationTheme = 'bootstrap';

    public $queryString = [
        'search' => ['except' => ''],
        'sort' => ['except' => 'id'],
        'direction' => ['except' => 'desc'],
        'cant' => ['except' => '5']
    ];

    protected $listeners = ['delete'];

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $asignaciondiagnosticos = AsignacionDiagnostico::where('user_id', 'like' , '%' . $this->search . '%')
                                                        ->orWhere('puesto_actual', 'like'. '%' . $this->search . '%')
                                                        ->orWhere('puesto_futuro', 'like'. '%' . $this->search . '%')
                                                        ->orWhere('evaluador', 'like'. '%' . $this->search . '%')
                                                        ->orWhere('rol_diagnostico', 'like'. '%' . $this->search . '%')
                                                        ->orWhere('reporta_a', 'like'. '%' . $this->search . '%')
                                                        ->orderBy($this->sort, $this->direction)
                                                        ->paginate($this->cant);

        return view('livewire.modulo-diagnosticos.asignacion-diagnostico.index', compact('asignaciondiagnosticos'));
    }

    public function order($sort){
        if($this->sort == $sort){
            if($this->direction == 'desc'){
                $this->direction = 'asc';
            } else {
                $this->direction = 'desc';
            }
        } else {
            $this->sort = $sort;
            $this->direction = 'asc';
        }
    }

    public function delete(AsignacionDiagnostico $asignaciondiagnostico){
        $this->asignaciondiagnostico = $asignaciondiagnostico;
        $this->asignaciondiagnostico_id = $asignaciondiagnostico->id;

        $asignaciondiagnostico->delete($this->asignaciondiagnostico_id);

        $this->emit('alert', '¡La asignación se ha eliminado con exito!');
    }
}
