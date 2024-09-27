<?php

namespace App\Filament\Resources\RabkaResource\Pages;

use App\Filament\Resources\RabkaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRabka extends EditRecord
{
    protected static string $resource = RabkaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
