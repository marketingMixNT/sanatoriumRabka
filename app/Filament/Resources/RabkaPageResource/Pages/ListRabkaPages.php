<?php

namespace App\Filament\Resources\RabkaPageResource\Pages;

use App\Filament\Resources\RabkaPageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRabkaPages extends ListRecords
{

    use ListRecords\Concerns\Translatable;

    protected static string $resource = RabkaPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
                // Actions\LocaleSwitcher::make(),
        ];
    }
}
