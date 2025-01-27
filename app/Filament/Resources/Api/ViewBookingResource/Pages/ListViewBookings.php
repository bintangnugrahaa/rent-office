<?php

namespace App\Filament\Resources\Api\ViewBookingResource\Pages;

use App\Filament\Resources\Api\ViewBookingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListViewBookings extends ListRecords
{
    protected static string $resource = ViewBookingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
