<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TemplateTagResource\Pages;
use App\Filament\Resources\TemplateTagResource\RelationManagers;
use App\Models\TemplateTag;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TemplateTagResource extends Resource
{
    protected static ?string $model = TemplateTag::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Tags Template';
    protected static ?string $pluralLabel = 'Danh sách Tags Template';
    protected static ?string $modelLabel = 'Tag Template';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make(1)->schema([
                    Forms\Components\TextInput::make('name')
                        ->label('Tên Tag')
                        ->required()
                        ->maxLength(255)
                        ,
                ]),
            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('name')->label('Tên Tag')->searchable(),
            Tables\Columns\TextColumn::make('slug')->label('Slug')->searchable(),
            Tables\Columns\TextColumn::make('created_at')->label('Ngày tạo')->dateTime(),
        ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTemplateTags::route('/'),
            'create' => Pages\CreateTemplateTag::route('/create'),
            'edit' => Pages\EditTemplateTag::route('/{record}/edit'),
        ];
    }
}
