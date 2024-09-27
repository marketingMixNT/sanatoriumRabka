<?php

namespace App\Filament\Resources\RabkaAttractionResource\Pages;

use App\Filament\Resources\RabkaAttractionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRabkaAttractions extends ListRecords
{
    protected static string $resource = RabkaAttractionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
