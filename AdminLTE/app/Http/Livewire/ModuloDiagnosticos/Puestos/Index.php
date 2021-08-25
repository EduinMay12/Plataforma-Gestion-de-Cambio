<?php

namespace App\Http\Livewire\ModuloDiagnosticos\Puestos;

use Livewire\Component;

use Illuminate\Support\Facades\DB;

use App\Models\ModuloDiagnosticos\Puesto;
use Livewire\WithPagination;

class Index extends Component
{
    
    use WithPagination;

    public $puesto;
    public $puesto_id;

    public $search = '';
    public $sort = 'id';
    public $direction = 'desc';
    public $cant = '5';
    protected $paginationTheme = 'bootstrap';

    protected $queryString = [
        'cant' => ['except' => '5'],
        'sort' => ['except' => 'id'],
        'direction' => ['except' => 'desc'],
        'search' => ['except' => '']
    ];

    protected $listeners = ['delete'];

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $puestos = Puesto::where('nombre', 'like', '%' . $this->search . '%')
                            ->orWhere('descripcion', 'like', '%' . $this->search . '%')
                            ->orWhere('reporta_a', 'like', '%' . $this->search . '%')
                            ->orWhere('estatus', 'like', '%' . $this->search . '%')
                            ->orderBy($this->sort, $this->direction)
                            ->paginate($this->cant);

        return view('livewire.modulo-diagnosticos.puestos.index', compact('puestos'));
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

    public function delete(Puesto $puesto){
        $this->puesto = $puesto;
        $this->puesto_id = $puesto->id;

        $consulta = DB::table('competencia_puesto')->where('puesto_id', '=', $puesto->id)->get();
        $contador = count($consulta);

        if($contador > 0){
            $this->emit('error', 'El puesto ya tiene sus competencias, por lo tanto, no se puede eliminar');
        }else{
            $puesto->delete($this->puesto_id);

            $this->emit('alert', '¡El puesto se ha eliminado con exito!');
        } 
    }
}
