<?php

namespace App\Http\Livewire;

use App\Models\Membres;
use Livewire\Component;

class MembersComponent extends Component
{
    public function openModal($memberId): void
    {
        $this->emit('openModal', $memberId);
    }

    public function render()
    {
        $members = Membres::all();
        return view('livewire.members-component', compact('members'));
    }

}

