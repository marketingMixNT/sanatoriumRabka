<?php

namespace App\Filament\Resources\RabkaAttractionResource\Pages;

use App\Filament\Resources\RabkaAttractionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRabkaAttraction extends EditRecord
{
    protected static string $resource = RabkaAttractionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
