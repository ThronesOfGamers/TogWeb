<?php

namespace App\Filament\Resources\MembersGamesResource\Pages;

use App\Filament\Resources\MembersGamesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMembersGames extends CreateRecord
{
    protected static string $resource = MembersGamesResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
