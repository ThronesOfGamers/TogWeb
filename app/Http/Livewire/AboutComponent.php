<?php

namespace App\Http\Livewire;

use App\Models\Games;
use App\Models\Membres;
use DateTime;
use Exception;
use Livewire\Component;

class AboutComponent extends Component
{
    /**
     * @throws Exception
     */
    public function render()
    {
        $games = Games::count();
        $members = Membres::whereNull('endDate')->count();
        $yearsCreate = Membres::min('entryDate');
        $yearsCreateObj = new DateTime($yearsCreate);

        $date = date('Y-m-d');

        $dateObj = new DateTime($date);

        $years = $yearsCreateObj->diff($dateObj)->y;


        return view('livewire.about-component', compact('games', 'members', 'years'));
    }
}
