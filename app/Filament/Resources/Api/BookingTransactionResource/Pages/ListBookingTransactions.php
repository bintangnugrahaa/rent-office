<?php

namespace App\Filament\Resources\Api\BookingTransactionResource\Pages;

use App\Filament\Resources\Api\BookingTransactionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBookingTransactions extends ListRecords
{
    protected static string $resource = BookingTransactionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
