<?php

namespace App\Filament\Resources\Api;

use App\Filament\Resources\Api\ViewBookingResource\Pages;
use App\Filament\Resources\Api\ViewBookingResource\RelationManagers;
use App\Models\Api\ViewBooking;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ViewBookingResource extends Resource
{
    protected static ?string $model = ViewBooking::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListViewBookings::route('/'),
            'create' => Pages\CreateViewBooking::route('/create'),
            'edit' => Pages\EditViewBooking::route('/{record}/edit'),
        ];
    }
}
