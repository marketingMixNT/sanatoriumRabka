<?php

namespace App\Filament\Resources\RabkaAttractionResource\Pages;

use App\Filament\Resources\RabkaAttractionResource;
use App\Models\RabkaAttraction;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRabkaAttractions extends ListRecords
{
    protected static string $resource = RabkaAttractionResource::class;

    protected function getHeaderActions(): array
    {
        return RabkaAttraction::count() === 0
        ? [Actions\CreateAction::make()]
        : [];

        
    }
}
