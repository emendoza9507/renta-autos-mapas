<?php

namespace App\Filament\Resources\RentalPointResource\Pages;

use App\Filament\Resources\RentalPointResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRentalPoints extends ListRecords
{
    protected static string $resource = RentalPointResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
