<?php

namespace App\Filament\Resources\MembersGamesResource\Pages;

use App\Filament\Resources\MembersGamesResource;
use Exception;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMembersGames extends EditRecord
{
    protected static string $resource = MembersGamesResource::class;

    /**
     * @throws Exception
     */
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
