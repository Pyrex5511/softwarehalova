<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EmployeeResource\Pages;
use App\Models\Employee;
use Filament\Forms;
use Filament\Forms\Form; // Opravený import
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class EmployeeResource extends Resource
{
    protected static ?string $model = Employee::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title_before')->label('Titul pred menom')->maxLength(255),
                Forms\Components\TextInput::make('name')->label('Meno a priezvisko')->required()->maxLength(255),
                Forms\Components\TextInput::make('title_after')->label('Titul za menom')->maxLength(255),
                Forms\Components\TextInput::make('position')->label('Pozícia')->required()->maxLength(255),
                Forms\Components\TextInput::make('email')->label('E-mail')->email()->required(),
                Forms\Components\TextInput::make('phone')->label('Telefón')->tel(),
                Forms\Components\TextInput::make('section')->label('Oddelenie')->maxLength(255),
                Forms\Components\TextInput::make('section_position')->label('Pozícia v oddelení')->maxLength(255),
                Forms\Components\FileUpload::make('photo_path')->label('Fotka')->image(),
                Forms\Components\TextInput::make('order')->label('Poradie')->numeric()->default(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title_before')->label('Titul pred menom'),
                Tables\Columns\TextColumn::make('name')->label('Meno a priezvisko'),
                Tables\Columns\TextColumn::make('title_after')->label('Titul za menom'),
                Tables\Columns\TextColumn::make('position')->label('Pozícia'),
                Tables\Columns\TextColumn::make('email')->label('E-mail'),
                Tables\Columns\TextColumn::make('phone')->label('Telefón'),
                Tables\Columns\TextColumn::make('section')->label('Oddelenie'),
                Tables\Columns\TextColumn::make('section_position')->label('Pozícia v oddelení'),
                Tables\Columns\ImageColumn::make('photo_path')->label('Fotka'),
                Tables\Columns\TextColumn::make('order')->label('Poradie'),
                Tables\Columns\TextColumn::make('created_at')->label('Vytvorené')->dateTime(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEmployees::route('/'),
            'create' => Pages\CreateEmployee::route('/create'),
            'edit' => Pages\EditEmployee::route('/{record}/edit'),
        ];
    }
}
