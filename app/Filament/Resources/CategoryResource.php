<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\Pages;
use App\Filament\Resources\CategoryResource\RelationManagers;
use App\Models\Category;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\DeleteAction as ActionsDeleteAction;
use Filament\Tables\Actions\EditAction as ActionsEditAction;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Danh mục Website';
    protected static ?string $pluralLabel = 'Danh mục Website';
    protected static ?string $modelLabel = 'Danh mục Website';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Thông tin danh mục')
                    ->schema([
                        TextInput::make('name')
                            ->label('Tên danh mục')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('Nhập tên danh mục'),
                            Forms\Components\TextInput::make('short_desc') // Thêm trường short_desc
                            ->nullable()
                            ->maxLength(255),
                    ]),
            ]);
    }
 

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('id')->label('ID')->sortable(),
            Tables\Columns\TextColumn::make('name')->label('Tên danh mục')->searchable(),
            Tables\Columns\TextColumn::make('short_desc')->label('Mô tả'), // Hiển thị short_desc trong bảng

            Tables\Columns\TextColumn::make('created_at')->label('Ngày tạo')->dateTime(),
            Tables\Columns\TextColumn::make('updated_at')->label('Ngày cập nhật')->dateTime(),
        ])
        ->actions([
            ActionsEditAction::make(),
            ActionsDeleteAction::make(),
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
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }
}
