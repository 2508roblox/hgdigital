<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WebsiteTagResource\Pages;
use App\Filament\Resources\WebsiteTagResource\RelationManagers;
use App\Models\Tag;
use App\Models\WebsiteTag;
use Filament\Actions\DeleteAction;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\DeleteAction as ActionsDeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WebsiteTagResource extends Resource
{
    protected static ?string $model = Tag::class;

    protected static ?string $navigationIcon = 'heroicon-o-tag';
    protected static ?string $navigationLabel = 'Thẻ Website';
    protected static ?string $pluralLabel = 'Thẻ Website';
    protected static ?string $modelLabel = 'Thẻ Website';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Section::make('Thông tin thẻ')
                ->schema([
                    TextInput::make('name')
                        ->label('Tên thẻ')
                        ->required()
                        ->maxLength(255)
                        ->placeholder('Nhập tên thẻ'),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('ID')->sortable(),
                Tables\Columns\TextColumn::make('name')->label('Tên thẻ')->searchable(),
                Tables\Columns\TextColumn::make('created_at')->label('Ngày tạo')->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')->label('Ngày cập nhật')->dateTime(),
            ])
            ->actions([
                EditAction::make(),
                ActionsDeleteAction::make(),
            ])
            ->filters([]);
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
            'index' => Pages\ListWebsiteTags::route('/'),
            'create' => Pages\CreateWebsiteTag::route('/create'),
            'edit' => Pages\EditWebsiteTag::route('/{record}/edit'),
        ];
    }
}
