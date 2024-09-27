<?php

namespace App\Filament\Resources\RehabilitationResource\Pages;

use App\Filament\Resources\RehabilitationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRehabilitation extends EditRecord
{
    protected static string $resource = RehabilitationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
