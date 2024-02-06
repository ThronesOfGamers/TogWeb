<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Membres;

class MembersModal extends Component
{
    public $selectedMember = null;

    protected $listeners = ['memberSelected'];


    public $readyToLoad = false;

    public function loadModal(): void
    {
        $this->readyToLoad = true;
    }
    public function mount()
    {
        $this->selectedMember = null;
    }
    public function memberSelected($selectedMemberId): void
    {
        $this->selectedMember = Membres::findOrFail($selectedMemberId);
        $this->loadModal();
        $this->dispatchBrowserEvent('open-modal');
    }

    public function closeModal(): void
    {
        $this->selectedMember = null; // Réinitialise le membre sélectionné
        $this->dispatchBrowserEvent('close-modal');
    }

    public function render()
    {
        return view('livewire.members-modal', [
        'member' => $this->readyToLoad ? $this->selectedMember : null,
        ]);
    }
}
