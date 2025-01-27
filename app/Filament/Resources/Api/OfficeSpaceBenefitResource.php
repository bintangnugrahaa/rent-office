<?php

namespace App\Filament\Resources\Api;

use App\Filament\Resources\Api\OfficeSpaceBenefitResource\Pages;
use App\Filament\Resources\Api\OfficeSpaceBenefitResource\RelationManagers;
use App\Models\Api\OfficeSpaceBenefit;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OfficeSpaceBenefitResource extends Resource
{
    protected static ?string $model = OfficeSpaceBenefit::class;

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
            'index' => Pages\ListOfficeSpaceBenefits::route('/'),
            'create' => Pages\CreateOfficeSpaceBenefit::route('/create'),
            'edit' => Pages\EditOfficeSpaceBenefit::route('/{record}/edit'),
        ];
    }
}
