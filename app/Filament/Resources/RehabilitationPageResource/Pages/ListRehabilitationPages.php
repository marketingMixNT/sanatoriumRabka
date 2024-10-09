<?php

namespace App\Filament\Resources\RehabilitationPageResource\Pages;

use App\Filament\Resources\RehabilitationPageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRehabilitationPages extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = RehabilitationPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            // Actions\LocaleSwitcher::make(),

        ];
    }
}
