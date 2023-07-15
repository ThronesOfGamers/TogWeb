<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Membres;

class MembersComponent extends Component
{
    public $members;

    public function mount()
    {
        $this->members = Membres::all();
    }

    public function render()
    {
        return view('livewire.members-component');
    }

    public function updated($propertyName)
    {
        $this->members = Membres::all();
    }
}
