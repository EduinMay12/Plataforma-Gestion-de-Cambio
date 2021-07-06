<?php

namespace App\Http\Livewire\ModuloCapacitaciones\Instructores;

use Livewire\Component;
use App\Models\User;
use App\Models\ModuloCapacitaciones\Instructore;
use Illuminate\Validation\Rule;

class Edit extends Component
{
    public $user_id;
    public $instructore;

    public function mount(Instructore $instructore){
        $this->instructore = $instructore;
        $this->user_id = $this->instructore->user_id;
    }

    public function rules()
    {
        return [
            'instructore.resena' => 'required',
            'instructore.status' => 'required',
            'user_id' => ['required', Rule::unique('instructores')->ignore($this->instructore->user_id, 'user_id')]
        ];
    }

    public function save()
    {
        $this->validate();

        if($this->user_id != $this->instructore->user_id)
        {
            $this->instructore->user_id = $this->user_id;
        }

        $this->instructore->save();

        $this->emit('alert', '¡El instructor se actualizó con exito!');
    }

    public function render()
    {
        $users = User::all();
        return view('livewire.modulo-capacitaciones.instructores.edit', compact('users'));
    }
}
