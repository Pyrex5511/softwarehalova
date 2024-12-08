<?php

namespace App\Filament\Resources\UdalostResource\Pages;

use App\Filament\Resources\UdalostResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUdalosts extends ListRecords
{
    protected static string $resource = UdalostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
