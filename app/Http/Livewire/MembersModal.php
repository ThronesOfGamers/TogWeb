<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Membres;

class MembersModal extends Component
{
    public $isOpen = false;
    public $memberData;

    protected $listeners = ['openModal'];

    public function openModal($memberId): void
    {
        $this->isOpen = true;
        $this->memberData = Membres::find($memberId);
    }

    public function closeModal(): void
    {
        $this->isOpen = false;
    }

    public function render()
    {
        return view('livewire.members-modal');
    }

}
