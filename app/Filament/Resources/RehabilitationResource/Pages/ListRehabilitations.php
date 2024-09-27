<?php

namespace App\Filament\Resources\RehabilitationResource\Pages;

use App\Filament\Resources\RehabilitationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRehabilitations extends ListRecords
{
    protected static string $resource = RehabilitationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
