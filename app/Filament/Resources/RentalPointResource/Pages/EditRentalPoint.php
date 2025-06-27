<?php

namespace App\Filament\Resources\RentalPointResource\Pages;

use App\Filament\Resources\RentalPointResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRentalPoint extends EditRecord
{
    protected static string $resource = RentalPointResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
