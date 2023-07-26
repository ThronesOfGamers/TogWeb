<?php

namespace App\Http\Livewire;

use App\Models\Membres;
use Livewire\Component;

class MembersComponent extends Component
{
    public $selectedMember;
    public function openModal(Membres $member): void
    {
        $this->selectedMember = $member;
        $this->dispatchBrowserEvent('open-modal');
    }
    public function render()
    {
        $members = Membres::all();
        return view('livewire.members-component', compact('members'));
    }

}
