<?php

namespace App\Filament\Resources\Api\ViewBookingResource\Pages;

use App\Filament\Resources\Api\ViewBookingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditViewBooking extends EditRecord
{
    protected static string $resource = ViewBookingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
