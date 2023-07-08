<?php

namespace App\Filament\Resources\MembersGamesResource\Pages;

use App\Filament\Resources\MembersGamesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMembersGames extends EditRecord
{
    protected static string $resource = MembersGamesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
