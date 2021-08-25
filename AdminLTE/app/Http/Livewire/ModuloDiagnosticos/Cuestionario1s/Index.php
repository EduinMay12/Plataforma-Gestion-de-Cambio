<?php

namespace App\Http\Livewire\ModuloDiagnosticos\Cuestionario1s;

use Livewire\Component;

use App\Models\ModuloDiagnosticos\Cuestionario1;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;

    public $cuestionario1;
    public $cuestionario1_id;

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

        $cuestionario1s = Cuestionario1::Where('nombre', 'like', '%' . $this->search . '%')
                                        ->orWhere('descripcion', 'like', '%' . $this->search . '%')
                                        ->orWhere('estatus', 'like', '%' . $this->search . '%')
                                        ->orderBy($this->sort, $this->direction)
                                        ->paginate($this->cant);

        return view('livewire.modulo-diagnosticos.cuestionario1s.index', compact('cuestionario1s'));
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

    public function delete(Cuestionario1 $cuestionario1){
        $this->cuestionario1 = $cuestionario1;
        $this->cuestionario1_id = $cuestionario1->id;

        $cuestionario1->delete($this->cuestionario1_id);

        $this->emit('alert', '¡El cuestionario se ha eliminado con exito!');
    }
}
