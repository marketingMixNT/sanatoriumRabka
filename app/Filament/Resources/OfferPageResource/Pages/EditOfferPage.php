<?php

namespace App\Filament\Resources\OfferPageResource\Pages;

use App\Filament\Resources\OfferPageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOfferPage extends EditRecord
{

    use EditRecord\Concerns\Translatable;

    protected static string $resource = OfferPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
                        // Actions\LocaleSwitcher::make(),

        ];
    }
}
