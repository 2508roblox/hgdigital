<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TemplateWebsiteResource\Pages;
use App\Filament\Resources\TemplateWebsiteResource\RelationManagers;
use App\Models\TemplateWebsite;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Str;
class TemplateWebsiteResource extends Resource
{
    protected static ?string $model = TemplateWebsite::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Templates Website';
    protected static ?string $pluralLabel = 'Danh sách Templates Website';
    protected static ?string $modelLabel = 'Template Website';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make(2)->schema([
                    Forms\Components\TextInput::make('name')
                        ->label('Tên Template')
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
                    Forms\Components\FileUpload::make('thumbnail')
                        ->label('Ảnh Thumbnail')
                        ->directory('templates/thumbnails')
                        ->image(),
                    Forms\Components\FileUpload::make('image')
                        ->label('Ảnh Website')
                        ->directory('templates/images')
                        ->image(),
                    Forms\Components\TextInput::make('purchases')
                        ->label('Số lượt mua')
                        ->numeric()
                        ->default(0),
                    Forms\Components\TextInput::make('original_price')
                        ->label('Giá gốc')
                        ->numeric()
                        ->required(),
                    Forms\Components\TextInput::make('discounted_price')
                        ->label('Giá khuyến mãi')
                        ->numeric(),
                    Forms\Components\TextInput::make('demo_link')
                        ->label('Link Demo')
                        ->url(),
                ]),
                Forms\Components\Grid::make(1)->schema([
                    Forms\Components\Select::make('category_id')
                        ->label('Danh mục')
                        ->relationship('category', 'name')
                        ->required(),
                    Forms\Components\Select::make('tags')
                        ->label('Tags')
                        ->multiple()
                        ->relationship('tags', 'name')
                        ->preload(),
                    RichEditor::make('description')
                        ->label('Mô tả')
                         ,
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Tên Template')->searchable(),
                Tables\Columns\ImageColumn::make('thumbnail')->label('Ảnh Thumbnail'),
                Tables\Columns\TextColumn::make('purchases')->label('Số lượt mua'),
                Tables\Columns\TextColumn::make('original_price')->label('Giá gốc'),
                Tables\Columns\TextColumn::make('discounted_price')->label('Giá khuyến mãi'),
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
            'index' => Pages\ListTemplateWebsites::route('/'),
            'create' => Pages\CreateTemplateWebsite::route('/create'),
            'edit' => Pages\EditTemplateWebsite::route('/{record}/edit'),
        ];
    }
}
