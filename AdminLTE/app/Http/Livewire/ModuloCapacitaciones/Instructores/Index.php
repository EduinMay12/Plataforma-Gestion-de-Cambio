<?php

namespace App\Http\Livewire\ModuloCapacitaciones\Instructores;

use Livewire\Component;
use App\Models\ModuloCapacitaciones\Instructore;
use App\Models\ModuloCapacitaciones\Curso;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search = '';
    public $sort = 'id';
    public $direction = 'desc';
    public $cant = '5';

    protected $queryString = [
        'cant' => ['except' => '5'], 
        'sort' => ['except' => 'id'], 
        'direction' => ['except' => 'desc'], 
        'search' => ['except' => '']
    ];

    protected $paginationTheme = "bootstrap";

    protected $listeners = ['delete'];
    
    //resetea la pagina, al realizar una nueva busqueda
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $instructores = Instructore::select('instructores.id', 'instructores.resena', 'users.name', 'instructores.status')
                ->join('users', 'instructores.user_id', '=', 'users.id')
                ->where('users.name', 'like', '%'. $this->search. '%')
                ->orderBy($this->sort, $this->direction)
                ->paginate($this->cant);

        return view('livewire.modulo-capacitaciones.instructores.index', compact('instructores'));

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

    public function delete(Instructore $instructore)
    {
        $cursos = Curso::where('instructore_id', '=', $instructore->id)->get();
        $contador = count($cursos);

        if($contador > 0){
            $this->emit('error', 'Este instructor no se puede eliminar, tiene cursos');
        }else{
            $instructore->delete();
            $this->emit('alert', '¡Instructor eliminado con exito!');
        }
        
    }
}
