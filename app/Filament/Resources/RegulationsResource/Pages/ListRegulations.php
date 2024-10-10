<?php

namespace App\Filament\Resources\RegulationsResource\Pages;

use Filament\Actions;
use App\Models\Regulations;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\RegulationsResource;

class ListRegulations extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = RegulationsResource::class;

  

    protected function getHeaderActions(): array
    {
       
        $privacyPolicyExists = Regulations::exists();

        return array_filter([
           
            !$privacyPolicyExists ? Actions\CreateAction::make() : null,
            // Actions\LocaleSwitcher::make(),
        ]);
    }
}
