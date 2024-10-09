<?php

namespace App\Filament\Resources\RehabilitationResource\Pages;

use App\Filament\Resources\RehabilitationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRehabilitations extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = RehabilitationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
                                    // Actions\LocaleSwitcher::make(),

        ];
    }
}
