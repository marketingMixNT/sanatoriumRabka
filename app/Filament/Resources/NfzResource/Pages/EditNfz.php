<?php

namespace App\Filament\Resources\NfzResource\Pages;

use App\Filament\Resources\NfzResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNfz extends EditRecord
{
    protected static string $resource = NfzResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
