<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Membres;

class MembersModal extends Component
{
    protected $listeners = ['openModal', 'closeModal'];

    public $selectedMember;
    public function openModal(Membres $member): void
    {
        $this->selectedMember = $member;
        $this->dispatchBrowserEvent('open-modal');
    }

    public function closeModal(): void
    {
        $this->dispatchBrowserEvent('close-modal');
    }
    public function render()
    {
        return view('livewire.members-modal',['member' => $this->selectedMember]);
    }

}
