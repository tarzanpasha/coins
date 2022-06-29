<?php

namespace App\Filament\Resources\ChainResource\Pages;

use App\Filament\Resources\ChainResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListChains extends ListRecords
{
    protected static string $resource = ChainResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
