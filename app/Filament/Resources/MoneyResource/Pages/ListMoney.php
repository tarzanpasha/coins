<?php

namespace App\Filament\Resources\MoneyResource\Pages;

use App\Filament\Resources\MoneyResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMoney extends ListRecords
{
    protected static string $resource = MoneyResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
