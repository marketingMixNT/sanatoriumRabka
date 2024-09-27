<?php

namespace App\Filament\Resources\RabkaResource\Pages;

use App\Filament\Resources\RabkaResource;
use App\Models\Rabka;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRabkas extends ListRecords
{
    protected static string $resource = RabkaResource::class;

    protected function getHeaderActions(): array
    {
        return Rabka::count() === 0
            ? [Actions\CreateAction::make()]
            : [];
    }
}
