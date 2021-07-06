<?php

namespace App\Http\Livewire\ModuloCapacitaciones\Categorias;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use App\Models\ModuloCapacitaciones\Categoria;

class Edit extends Component
{
    use WithFileUploads;

    public $imagen;
    public $categoria;
    public $identificador;

    public function mount(Categoria $categoria)
    {
        $this->categoria = $categoria;
        $this->identificador = rand();
    }

    protected $rules = [
        'categoria.nombre' => 'required',
        'categoria.descripcion' => 'required',
        'categoria.contador' => 'required',
        'categoria.status' => 'required'
    ];

    public function save()
    {
        $this->validate();

        if($this->imagen)
        {
            Storage::delete([$this->categoria->imagen]);
            $this->categoria->imagen = $this->imagen->store('categorias');
        }

        $this->categoria->save();
        
        $this->reset(['imagen']);

        $this->identificador = rand();

        $this->emit('alert', '¡La categoria se actualizó con exito!');
    }

    public function render()
    {
        return view('livewire.modulo-capacitaciones.categorias.edit');
    }
}
