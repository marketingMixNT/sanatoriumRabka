<?php

namespace App\Filament\Resources\OfferPageResource\Pages;

use App\Filament\Resources\OfferPageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOfferPages extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = OfferPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
                        // Actions\LocaleSwitcher::make(),

        ];
    }
}
