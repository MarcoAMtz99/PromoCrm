<?php

namespace App\Http\Livewire\Paciente;

use Livewire\Component;
use App\Models\Paciente;
class Index extends Component
{
    public function render()
    {	
    	$Paciente = Paciente::all();
        return view('livewire.paciente.index',['Paciente'=>$Paciente]);
    }
}
