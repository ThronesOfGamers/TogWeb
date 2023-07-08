<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MembersResource\Pages;
use App\Filament\Resources\MembersResource\RelationManagers;
use App\Models\Members;
use App\Models\Membres;
use Exception;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use mysql_xdevapi\Schema;

class MembersResource extends Resource
{
    protected static ?string $model = Membres::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        Grid::make()
                            ->schema([
                                TextInput::make('pseudo')
                                    ->autofocus()
                                    ->required()
                                    ->maxLength(50)
                                    ->unique(ignoreRecord: true),
                                TextInput::make('grade')
                                    ->required(),
                                ]),
                        RichEditor::make('description'),
                       ])->columnSpan(8),
                Card::make()
                    ->schema([
                        FileUpload::make('picture')
                            ->image()
                            ->avatar()
                            ->directory('members')
                            ->rules(['nullable', 'mimes:jpg,jpeg,png', 'max:2048']),
                        Grid::make()
                            ->schema([
                                DatePicker::make('entryDate')
                                    ->required(),
                                DatePicker::make('endDate'),
                            ]),
                ])->columnSpan(4),
            ])->columns(12);
    }

    /**
     * @throws Exception
     */
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
               ImageColumn::make('picture'),
                TextColumn::make('pseudo')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('grade')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('entryDate')
                    ->searchable()
                    ->sortable()
                    ->date(),
                TextColumn::make('endDate')
                    ->searchable()
                    ->sortable()
                    ->date(),

            ])
            ->filters([
                //
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
            'index' => Pages\ListMembers::route('/'),
            'create' => Pages\CreateMembers::route('/create'),
            'edit' => Pages\EditMembers::route('/{record}/edit'),
        ];
    }
}
