<?php

namespace App\Filament\Resources\WebsiteTagResource\Pages;

use App\Filament\Resources\WebsiteTagResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWebsiteTag extends EditRecord
{
    protected static string $resource = WebsiteTagResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
