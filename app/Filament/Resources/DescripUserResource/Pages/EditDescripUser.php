<?php

namespace App\Filament\Resources\DescripUserResource\Pages;

use App\Filament\Resources\DescripUserResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDescripUser extends EditRecord
{
    protected static string $resource = DescripUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
