<?php

namespace App\Filament\Admin\Resources\HeroSectionsResource\Pages;

use App\Filament\Admin\Resources\HeroSectionsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHeroSections extends EditRecord
{
    protected static string $resource = HeroSectionsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
