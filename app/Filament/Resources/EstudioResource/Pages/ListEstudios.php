<?php

namespace App\Filament\Resources\EstudioResource\Pages;

use App\Filament\Resources\EstudioResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEstudios extends ListRecords
{
    protected static string $resource = EstudioResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
