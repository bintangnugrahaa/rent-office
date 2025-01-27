<?php

namespace App\Filament\Resources\Api\BookingTransactionResource\Pages;

use App\Filament\Resources\Api\BookingTransactionResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBookingTransaction extends CreateRecord
{
    protected static string $resource = BookingTransactionResource::class;
}
