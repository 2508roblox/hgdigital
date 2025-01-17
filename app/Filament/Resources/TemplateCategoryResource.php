<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TemplateCategoryResource\Pages;
use App\Filament\Resources\TemplateCategoryResource\RelationManagers;
use App\Models\TemplateCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Str;
class TemplateCategoryResource extends Resource
{
    protected static ?string $model = TemplateCategory::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Danh mục Template';
    protected static ?string $pluralLabel = 'Danh mục Templates';
    protected static ?string $modelLabel = 'Danh mục Template';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make(2)->schema([
                    Forms\Components\TextInput::make('name')
                        ->label('Tên danh mục')
                        ->required()
                        ->maxLength(255)
                        ->live(onBlur: true)
                        ->afterStateUpdated(function (Set $set, $state) {
                            $set('slug', Str::slug($state));
                        }),
                    Forms\Components\TextInput::make('slug')
                        ->label('Slug')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\FileUpload::make('image')
                        ->label('Ảnh danh mục')
                        ->directory('template_categories/images')
                        ->image(),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('name')->label('Tên danh mục')->searchable(),
            Tables\Columns\ImageColumn::make('image')->label('Ảnh'),
            Tables\Columns\TextColumn::make('slug')->label('Slug'),
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
            'index' => Pages\ListTemplateCategories::route('/'),
            'create' => Pages\CreateTemplateCategory::route('/create'),
            'edit' => Pages\EditTemplateCategory::route('/{record}/edit'),
        ];
    }
}
