<?php

namespace App\Http\Livewire\ModuloDiagnosticos\Niveles;

use Livewire\Component;

use App\Models\ModuloDiagnosticos\Nivel;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination; 

    public $search = '';
    public $sort = 'id';
    public $direction = 'desc';
    public $cant = '5';
    protected $paginationTheme = "bootstrap";

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
        $niveles = Nivel::where('nombre', 'like' , '%' . $this->search . '%')
                                ->orderBy($this->sort, $this->direction)
                                ->paginate($this->cant);

        return view('livewire.modulo-diagnosticos.niveles.index', compact('niveles'));
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

    public function delete(Nivel $nivel){
        $nivel->delete();
    }
}
