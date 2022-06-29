<?php

namespace App\Filament\Resources\ChainResource\Pages;

use App\Filament\Resources\ChainResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateChain extends CreateRecord
{
    protected static string $resource = ChainResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
