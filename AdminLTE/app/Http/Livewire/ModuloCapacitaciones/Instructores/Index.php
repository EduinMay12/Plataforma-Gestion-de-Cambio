<?php

namespace App\Http\Livewire\ModuloCapacitaciones\Instructores;

use Livewire\Component;
use App\Models\ModuloCapacitaciones\Instructore;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search = '';
    public $sort = 'id';
    public $direction = 'desc';
    public $cant = '10';

    protected $queryString = [
        'cant' => ['except' => '10'], 
        'sort' => ['except' => 'id'], 
        'direction' => ['except' => 'desc'], 
        'search' => ['except' => '']
    ];

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
                ->where('instructores.resena', 'like', '%'. $this->search. '%')
                ->orWhere('users.name', 'like', '%'. $this->search. '%')
                ->orderBy($this->sort, $this->direction)
                ->paginate($this->cant);

        // $instructores = Instructore::where('id', 'like' , '%' . $this->search . '%')
        //             ->orWhere('resena', 'like' , '%' . $this->search . '%')
        //             ->orderBy($this->sort, $this->direction)
        //             ->paginate($this->cant);

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
        $instructore->delete();
    }
}
