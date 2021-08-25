<?php

namespace App\Http\Livewire\ModuloDiagnosticos\Cuestionario2s;

use Livewire\Component;

use App\Models\ModuloDiagnosticos\Cuestionario2;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;

    public $cuestionario2;
    public $cuestionario2_id;

    public $search = '';
    public $sort = 'id';
    public $direction = 'desc';
    public $cant = '5';
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

        $cuestionario2s = Cuestionario2::where('nombre', 'like', '%' . $this->search . '%')
                                        ->orWhere('descripcion', 'like', '%' . $this->search . '%')
                                        ->orWhere('estatus', 'like', '%' . $this->search . '%')
                                        ->orderBy($this->sort, $this->direction)
                                        ->paginate($this->cant);

        return view('livewire.modulo-diagnosticos.cuestionario2s.index', compact('cuestionario2s'));
    }


    public function order($sort)
    {
        if ($this->sort == $sort) {
            if ($this->direction == 'desc') {
                $this->direction = 'asc';
            } else {
                $this->direction = 'desc';
            }
        } else {
            $this->sort = $sort;
            $this->direction = 'asc';
        }
    }

    public function delete(Cuestionario2 $cuestionario2){

        $this->cuestionario2 = $cuestionario2;
        $this->cuestionario2_id = $cuestionario2->id;

        $cuestionario2->delete($this->cuestionario2_id);

        $this->emit('alert', '¡El cuestionario se ha eliminado con exito!');
    }
}
