<?php

namespace App\Filament\Resources\NfzPageResource\Pages;

use App\Filament\Resources\NfzPageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNfzPage extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = NfzPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
             // Actions\LocaleSwitcher::make(),
        ];
    }
}
