<?php

namespace App\Filament\Resources\RehabilitationResource\Pages;

use App\Filament\Resources\RehabilitationResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateRehabilitation extends CreateRecord
{

    use CreateRecord\Concerns\Translatable;

    protected static string $resource = RehabilitationResource::class;

      // protected function getHeaderActions(): array
    // {
    //     return [
    //         Actions\LocaleSwitcher::make(),

    //     ];
    // }
}
