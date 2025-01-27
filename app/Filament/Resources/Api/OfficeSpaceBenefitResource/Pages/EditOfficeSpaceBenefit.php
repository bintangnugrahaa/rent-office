<?php

namespace App\Filament\Resources\Api\OfficeSpaceBenefitResource\Pages;

use App\Filament\Resources\Api\OfficeSpaceBenefitResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOfficeSpaceBenefit extends EditRecord
{
    protected static string $resource = OfficeSpaceBenefitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
