<?php

namespace App\Filament\Resources\TemplateWebsiteResource\Pages;

use App\Filament\Resources\TemplateWebsiteResource;
use Filament\Actions;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\ListRecords;

class ListTemplateWebsites extends ListRecords
{
    protected static string $resource = TemplateWebsiteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            \EightyNine\ExcelImport\ExcelImportAction::make()
            ->slideOver()
            ->color("primary")
            ->use(\App\Imports\TemplateWebsiteImport::class)
            ->beforeUploadField([
                TextInput::make('default_category_id')
                    ->label('Danh mục mặc định')
                    ->numeric(),
            ])
            ->beforeImport(function (array $data, $livewire, $excelImportAction) {
                $defaultCategoryId = $data['default_category_id'];
                $excelImportAction->additionalData([
                    'category_id' => $defaultCategoryId,
                ]);
            }),
        Actions\CreateAction::make(),

        ];
    }
}
