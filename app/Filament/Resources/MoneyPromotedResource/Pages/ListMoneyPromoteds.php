<?php

namespace App\Filament\Resources\MoneyPromotedResource\Pages;

use App\Filament\Resources\MoneyPromotedResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMoneyPromoteds extends ListRecords
{
    protected static string $resource = MoneyPromotedResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
