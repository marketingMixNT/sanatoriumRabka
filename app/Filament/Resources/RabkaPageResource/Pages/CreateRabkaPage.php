<?php

namespace App\Filament\Resources\RabkaPageResource\Pages;

use App\Filament\Resources\RabkaPageResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateRabkaPage extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = RabkaPageResource::class;

     // protected function getHeaderActions(): array
    // {
    //     return [
    //         Actions\LocaleSwitcher::make(),

    //     ];
    // }
}
