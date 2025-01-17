<?php

namespace App\Filament\Resources\TemplateTagResource\Pages;

use App\Filament\Resources\TemplateTagResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTemplateTags extends ListRecords
{
    protected static string $resource = TemplateTagResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
