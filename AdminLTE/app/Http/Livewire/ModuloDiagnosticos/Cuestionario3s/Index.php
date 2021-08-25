<?php

namespace App\Http\Livewire\ModuloDiagnosticos\Cuestionario3s;

use Livewire\Component;

use App\Models\ModuloDiagnosticos\Cuestionario3;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;

    public $cuestionario3;
    public $cuestionario3_id;

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

        $cuestionario3s = Cuestionario3::where('nombre', 'like', '%' . $this->search . '%')
                                        ->orWhere('descripcion', 'like', '%' . $this->search . '%')
                                        ->orWhere('estatus', 'like', '%' . $this->search . '%')
                                        ->orderBy($this->sort, $this->direction)
                                        ->paginate($this->cant);

        return view('livewire.modulo-diagnosticos.cuestionario3s.index', compact('cuestionario3s'));
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

    public function delete(Cuestionario3 $cuestionario3){
        
        $this->cuestionario3 = $cuestionario3;
        $this->cuestionario3_id = $cuestionario3->id;

        $cuestionario3->delete($this->cuestionario3_id);

        $this->emit('alert', '¡El cuestionario se ha eliminado con exito!');
    }
}
