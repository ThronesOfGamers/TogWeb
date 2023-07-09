<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsResource\Pages;
use App\Filament\Resources\NewsResource\RelationManagers;
use App\Models\News;
use Closure;
use Exception;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class NewsResource extends Resource
{
    protected static ?string $model = News::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    public static function form(Form $form): Form
    {
        return $form

        ->schema([
        Card::make()
            ->schema([
                Grid::make()
                    ->schema([
                        TextInput::make('title')
                            ->autofocus()
                            ->required()
                            ->maxLength(2048)
                            ->reactive()
                            ->afterStateUpdated(function (Closure $set, $state) {
                                $set('slug', Str::slug($state));
                            }),
                        TextInput::make('slug')
                            ->required()
                            ->maxLength(2048),
                        TextInput::make('meta_title')
                            ->maxLength(255),
                        Textarea::make('meta_description')
                            ->maxLength(255),
                    ]),
                RichEditor::make('content')
                    ->required(),
            ])->columnSpan(8),
        Card::make()
            ->schema([
                Grid::make()
                    ->schema([
                        Select::make('author')
                            ->default(function () {
                                return auth()->user()->id;
                            })
                            ->relationship('author', 'name')
                            ->required(),
                        DatePicker::make('date_publish')
                            ->default(now()),
                    ]),
                FileUpload::make('picture')
                    ->image()
                    ->directory('news')
                    ->rules(['nullable', 'mimes:jpg,jpeg,png', 'max:2048']),
                Toggle::make('is_published')
                    ->default(false)
                    ->offColor('error')
                    ->onColor('success')
                    ->onIcon('heroicon-o-check-circle'),
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
                TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('author.name', 'author')
                    ->searchable()
                    ->sortable(),
                IconColumn::make('is_published')
                    ->sortable()
                    ->boolean(),
               TextColumn::make('date_publish')
                    ->searchable()
                    ->sortable()
                    ->date(),
               TextColumn::make('updated_at')
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
            'index' => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit' => Pages\EditNews::route('/{record}/edit'),
        ];
    }
}
