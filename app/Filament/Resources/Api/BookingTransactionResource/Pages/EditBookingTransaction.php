<?php

namespace App\Filament\Resources\Api\BookingTransactionResource\Pages;

use App\Filament\Resources\Api\BookingTransactionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBookingTransaction extends EditRecord
{
    protected static string $resource = BookingTransactionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
