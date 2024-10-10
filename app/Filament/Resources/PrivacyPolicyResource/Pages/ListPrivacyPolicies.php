<?php

namespace App\Filament\Resources\PrivacyPolicyResource\Pages;

use Filament\Actions;
use App\Models\PrivacyPolicy;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\PrivacyPolicyResource;

class ListPrivacyPolicies extends ListRecords
{

    use ListRecords\Concerns\Translatable;

    protected static string $resource = PrivacyPolicyResource::class;

   


    protected function getHeaderActions(): array
    {
       
        $privacyPolicyExists = PrivacyPolicy::exists();

        return array_filter([
           
            !$privacyPolicyExists ? Actions\CreateAction::make() : null,
            // Actions\LocaleSwitcher::make(),
        ]);
    }
}
