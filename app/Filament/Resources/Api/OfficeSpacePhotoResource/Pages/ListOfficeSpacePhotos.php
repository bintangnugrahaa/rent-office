<?php

namespace App\Filament\Resources\Api\OfficeSpacePhotoResource\Pages;

use App\Filament\Resources\Api\OfficeSpacePhotoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOfficeSpacePhotos extends ListRecords
{
    protected static string $resource = OfficeSpacePhotoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
