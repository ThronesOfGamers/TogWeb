<?php

namespace App\Filament\Resources\MembersGamesResource\Pages;

use App\Filament\Resources\MembersGamesResource;
use Exception;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMembersGames extends ListRecords
{
    protected static string $resource = MembersGamesResource::class;

    /**
     * @throws Exception
     */
    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
