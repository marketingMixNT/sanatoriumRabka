<?php

namespace App\Filament\Resources\NfzPageResource\Pages;

use App\Filament\Resources\NfzPageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNfzPages extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = NfzPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            // Actions\LocaleSwitcher::make(),

        ];
    }
}
