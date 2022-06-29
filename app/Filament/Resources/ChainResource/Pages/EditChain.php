<?php

namespace App\Filament\Resources\ChainResource\Pages;

use App\Filament\Resources\ChainResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditChain extends EditRecord
{
    protected static string $resource = ChainResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
