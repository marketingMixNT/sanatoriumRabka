<?php

namespace App\Filament\Resources\RehabilitationTreatmentsResource\Pages;

use App\Filament\Resources\RehabilitationTreatmentsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRehabilitationTreatments extends EditRecord
{
    protected static string $resource = RehabilitationTreatmentsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
