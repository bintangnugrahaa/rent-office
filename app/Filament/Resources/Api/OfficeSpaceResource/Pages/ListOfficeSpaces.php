<?php

namespace App\Filament\Resources\Api\OfficeSpaceResource\Pages;

use App\Filament\Resources\Api\OfficeSpaceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOfficeSpaces extends ListRecords
{
    protected static string $resource = OfficeSpaceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
