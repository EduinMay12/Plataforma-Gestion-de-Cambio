<?php

namespace App\Http\Livewire\ModuloDiagnosticos\RoleDiagnostico;

use Livewire\Component; 

use App\Models\ModuloDiagnosticos\RoleDiagnostico;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search = '', $sort = 'id', 
        $direction = 'desc', $cant = '5';

    protected $paginationTheme = 'bootstrap';

    protected $queryString = [
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

        $roldiagnosticos = RoleDiagnostico::where('nombre', 'like', '%' . $this->search . '%')
        ->orWhere('descripcion', 'like', '%' . $this->search . '%')
        ->orWhere('estatus', 'like', '%' . $this->search . '%')
        ->orderBy($this->sort, $this->direction)
        ->paginate($this->cant);

        return view('livewire.modulo-diagnosticos.role-diagnostico.index', compact('roldiagnosticos'));
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

    public function delete(RoleDiagnostico $roldiagnostico){
        $roldiagnostico->delete();
    }
}
