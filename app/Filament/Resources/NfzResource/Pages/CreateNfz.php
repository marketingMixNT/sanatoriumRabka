<?php

namespace App\Filament\Resources\NfzResource\Pages;

use App\Filament\Resources\NfzResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateNfz extends CreateRecord
{

    use CreateRecord\Concerns\Translatable;

    protected static string $resource = NfzResource::class;

    // protected function getHeaderActions(): array
    // {
    //     return [
    //         Actions\LocaleSwitcher::make(),

    //     ];
    // }
}
