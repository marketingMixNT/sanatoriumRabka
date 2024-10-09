<?php

namespace App\Filament\Resources\RehabilitationPageResource\Pages;

use App\Filament\Resources\RehabilitationPageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRehabilitationPage extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = RehabilitationPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
              // Actions\LocaleSwitcher::make(),
        ];
    }
}
