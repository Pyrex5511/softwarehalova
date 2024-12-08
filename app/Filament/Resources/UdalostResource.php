<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UdalostResource\Pages;
use App\Models\Udalost;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TextArea;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\TextColumn;

class UdalostResource extends Resource
{
    protected static ?string $model = Udalost::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('nazov')
                    ->required()
                    ->maxLength(255),
                TextInput::make('popis')
                    ->label('Popis udalosti')
                    ->required(),
                DatePicker::make('datum_uskutocnenia')
                    ->required(),
                TextInput::make('miesto')
                    ->default('Halova')
                    ->required(),
                TextInput::make('organizator')
                    ->default('Skola Halova')
                    ->required(),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('nazov')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('popis')
                    ->limit(50),
                TextColumn::make('datum_uskutocnenia')
                    ->label('Dátum uskutočnenia')
                    ->date('d.m.Y')
                    ->sortable(),
                TextColumn::make('miesto')
                    ->searchable(),
                TextColumn::make('organizator')
                    ->searchable()

            ])
            ->filters([])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUdalosts::route('/'),
            'create' => Pages\CreateUdalost::route('/create'),
            'edit' => Pages\EditUdalost::route('/{record}/edit'),
        ];
    }
}
