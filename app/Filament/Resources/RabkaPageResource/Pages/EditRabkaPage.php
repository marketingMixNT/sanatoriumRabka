<?php

namespace App\Filament\Resources\RabkaPageResource\Pages;

use App\Filament\Resources\RabkaPageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRabkaPage extends EditRecord
{

    use EditRecord\Concerns\Translatable;

    protected static string $resource = RabkaPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
                // Actions\LocaleSwitcher::make(),
        ];
    }
}
