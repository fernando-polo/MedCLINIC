<?php

namespace App\Filament\Resources\DescripUserResource\Pages;

use App\Filament\Resources\DescripUserResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDescripUsers extends ListRecords
{
    protected static string $resource = DescripUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
