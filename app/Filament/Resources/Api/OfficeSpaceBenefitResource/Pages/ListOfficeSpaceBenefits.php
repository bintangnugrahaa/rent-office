<?php

namespace App\Filament\Resources\Api\OfficeSpaceBenefitResource\Pages;

use App\Filament\Resources\Api\OfficeSpaceBenefitResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOfficeSpaceBenefits extends ListRecords
{
    protected static string $resource = OfficeSpaceBenefitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
