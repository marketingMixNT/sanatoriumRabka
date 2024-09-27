<?php

namespace App\Filament\Resources\NfzResource\Pages;

use App\Filament\Resources\NfzResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNfzs extends ListRecords
{
    protected static string $resource = NfzResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
