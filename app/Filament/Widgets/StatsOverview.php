<?php

namespace App\Filament\Widgets;

use App\Models\Games;
use App\Models\Membres;
use App\Models\News;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{

    protected function getCards(): array
    {
        $count = Membres::where('endDate', null)->count();
        $countGame = Games::where('isActif', true)->count();
        return [
            Card::make('Members Actif', $count),
            Card::make('Membre total' , Membres::count()),
            Card::make('Games Actif',$countGame),
            Card::make('Games total', Games::count()),
            Card::make('News', News::count()),
        ];
    }
}
