<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MembersGamesResource\Pages;
use App\Filament\Resources\MembersGamesResource\RelationManagers;
use App\Models\Games;
use App\Models\GamesMembers;
use App\Models\Membres;
use Exception;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


class MembersGamesResource extends Resource
{
    protected static ?string $model = GamesMembers::class;
    protected static ?string $navigationGroup = 'Teams';
    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Select::make('member_id')
                    ->relationship('membres', 'pseudo')
                    ->required(),
                Select::make('game_id')
                    ->relationship('games', 'name')
                    ->required(),


            ]);
    }

    /**
     * @throws Exception
     */
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('membres.pseudo')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('games.name')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('member')
                    ->placeholder('Select a Member')
                    ->relationship('membres', 'pseudo')
                    ->multiple(),
                SelectFilter::make('game')
                    ->placeholder('Select a Game')
                    ->relationship('games', 'name')
                    ->multiple(),

            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //

        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMembersGames::route('/'),
            'create' => Pages\CreateMembersGames::route('/create'),
            'edit' => Pages\EditMembersGames::route('/{record}/edit'),
        ];
    }
}
