<?php

namespace App\Http\Livewire\ModuloDiagnosticos\Competencias;

use Livewire\Component;

use App\Models\ModuloDiagnosticos\Competencia;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

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

        $competencias = Competencia::where('nombre', 'like', '%' . $this->search . '%')
                                    ->orWhere('accionCorta1_ba', 'like', '%' . $this->search . '%')
                                    ->orWhere('accionCorta1_ca', 'like', '%' . $this->search . '%')
                                    ->orWhere('accionCorta1_ex', 'like', '%' . $this->search . '%')
                                    ->orderBy($this->sort, $this->direction)
                                    ->paginate($this->cant);

        return view('livewire.modulo-diagnosticos.competencias.index', compact('competencias'));
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

    public function delete(Competencia $competencia){
        $competencia->delete();
    }
}
