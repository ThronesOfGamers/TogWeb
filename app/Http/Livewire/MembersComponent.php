<?php

namespace App\Http\Livewire;

use App\Models\Membres;
use Livewire\Component;

class MembersComponent extends Component
{
    public $members;
    public $selectedMemberId;

    public function mount(): void
    {
        $this->members = Membres::all();
    }
    public function openModal(Membres $member): void
    {
        $this->selectedMemberId  = $member->id;
        $this->emit('memberSelected', $this->selectedMemberId);
    }


    public function render()
    {
        return view('livewire.members-component');
    }

}

