<?php

namespace App\Http\Livewire\ModuloComunicacion\GestionCampaña;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use DB;
use Illuminate\Support\Facades\Storage;
use App\Models\ModuloComunicacion\Comunicacion;
use App\Models\ModuloComunicacion\Campana;
use App\Models\ModuloComunicacion\Elemento;
use App\Models\User;
use App\Models\Estados;
use App\Models\ModuloAdministrador\Empresa;
use App\Models\ModuloAdministrador\Sucursales;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

class Index extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $cant = '10';
    public $search = '';
    public $sort = 'id';
    public $direction = 'desc';

    public $view = 'table';

    protected $paginationTheme = "bootstrap";

    protected $listeners =['delete'];

    protected $queryString =
    [
        'cant' => ['except' => '10'],
        'sort' => ['except' => 'id'],
        'direction' => ['except' => 'desc'],
        'search' => ['except' => '']
    ];

    public function mount()
    {
        $this->identificador = rand();
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

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $users= User::all();
        $empresas = Empresa::where('estatus', '=', 1)->get();
        $sucursales = Sucursales::where('estatus', '=', 1)->get();
        $elementos = Elemento::where('status', '=', 1)->get();
        $comunicacion = Comunicacion::where('status', '=', 1)->get();
        $campañas = Campana::where('nombre', 'like' , '%' . $this->search . '%')
                    ->orWhere('fechainicio', 'like' , '%' . $this->search . '%')
                    ->orWhere('fechafin', 'like' , '%' . $this->search . '%')
                    ->orWhere('status', 'like' , '%' . $this->search . '%')
                    ->orderBy($this->sort, $this->direction)
                    ->paginate($this->cant);
        return view('livewire.modulo-comunicacion.gestion-campaña.index', compact('campañas','users','empresas','sucursales','comunicacion', 'elementos'));
    }

    public function create()
    {
        $this->view = 'create';
    }

    public function show(Campana $campaña)
    {
        $this->campaña = $campaña;
        $this->view = 'show';
    }
}
