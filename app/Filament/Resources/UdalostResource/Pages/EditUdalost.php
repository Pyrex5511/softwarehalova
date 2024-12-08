<?php

namespace App\Filament\Resources\UdalostResource\Pages;

use App\Filament\Resources\UdalostResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUdalost extends EditRecord
{
    protected static string $resource = UdalostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
