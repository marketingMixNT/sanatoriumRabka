<?php

namespace App\Filament\Resources\RehabilitationPageResource\Pages;

use App\Filament\Resources\RehabilitationPageResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateRehabilitationPage extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = RehabilitationPageResource::class;

     // protected function getHeaderActions(): array
    // {
    //     return [
    //         Actions\LocaleSwitcher::make(),

    //     ];
    // }
}
