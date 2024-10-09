<?php

namespace App\Filament\Resources\OfferPageResource\Pages;

use App\Filament\Resources\OfferPageResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateOfferPage extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = OfferPageResource::class;

     // protected function getHeaderActions(): array
    // {
    //     return [
    //         Actions\LocaleSwitcher::make(),

    //     ];
    // }
}
