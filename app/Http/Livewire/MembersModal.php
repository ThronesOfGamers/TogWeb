<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Membres;

class MembersModal extends Component
{
    public function render()
    {
        return view('livewire.members-modal');
    }

}
