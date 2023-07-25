<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Membres;

class MembersModal extends Component
{
    protected $listeners = ['openModal', 'closeModal'];
    public $memberId;
    public $member;
    public function openModal(): void
    {
        $this->dispatchBrowserEvent('open-modal');
    }

    public function closeModal(): void
    {
        $this->dispatchBrowserEvent('close-modal');
    }
    public function render()
    {
        return view('livewire.members-modal');
    }

}
