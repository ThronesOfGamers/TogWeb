<?php

namespace App\Filament\Widgets;

use App\Models\Games;
use App\Models\GamesMembers;
use Closure;
use Exception;
use Filament\Forms\Components\Select;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Console\View\Components\Task;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Filters\Filter;

class GameMembers extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';
    protected function getTableQuery(): Builder
    {
        // ...
        return GamesMembers::query()->latest();
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make( 'membres.pseudo', 'Pseudo')
                ->sortable()
                ->searchable(),
            TextColumn::make('games.name', 'Game')
                ->sortable()
                ->searchable(),


        ];
    }

    /**
     * @throws Exception
     */
    protected function getTableFilters(): array
    {
        return [
            // ...
            Filter::make('Games')
                ->form([
                    Select::make('games.name')
                    ->label('Game')
                    ->placeholder('Select a game')
                    ->options(
                        Games::all()->pluck('name', 'id')
                    )
                    ->afterStateUpdated(
                        fn (callable $set, $state) => $set('game_id', null)
                    )
                ])
        ];
    }

}
