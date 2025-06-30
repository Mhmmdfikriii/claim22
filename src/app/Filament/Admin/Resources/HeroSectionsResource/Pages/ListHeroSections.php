<?php

namespace App\Filament\Admin\Resources\HeroSectionsResource\Pages;

use App\Filament\Admin\Resources\HeroSectionsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHeroSections extends ListRecords
{
    protected static string $resource = HeroSectionsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
