<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Membres;

class MembersModal extends Component
{
    protected $listeners = ['openModal'];

    public $selectedMember;

    public function openModal($membreId): void
    {
        $this->selectedMember = Membres::find($membreId);
        $this->dispatchBrowserEvent('open-modal');
    }

    public function closeModal(): void
    {
        $this->selectedMember = null; // Réinitialise le membre sélectionné
        $this->dispatchBrowserEvent('close-modal');
    }

    public function render()
    {
        return view('livewire.members-modal');
    }
}
