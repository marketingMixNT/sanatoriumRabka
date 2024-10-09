<?php

namespace App\Filament\Resources\NfzPageResource\Pages;

use App\Filament\Resources\NfzPageResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateNfzPage extends CreateRecord
{

    use CreateRecord\Concerns\Translatable;

    protected static string $resource = NfzPageResource::class;

    // protected function getHeaderActions(): array
    // {
    //     return [
    //         Actions\LocaleSwitcher::make(),

    //     ];
    // }
}
