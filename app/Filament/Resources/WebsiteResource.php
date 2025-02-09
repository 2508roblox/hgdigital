<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WebsiteResource\Pages;
use App\Filament\Resources\WebsiteResource\RelationManagers;
use App\Models\Category;
use App\Models\Website;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ForceDeleteAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WebsiteResource extends Resource
{
    protected static ?string $model = Website::class;

    protected static ?string $navigationIcon = 'heroicon-o-globe-alt';
    protected static ?string $navigationLabel = 'Websites';
    protected static ?string $pluralLabel = 'Websites';
    protected static ?string $modelLabel = 'Website';
    protected static ?string $navigationGroup = 'Quản lý Websites đã làm'; // Nhóm chung
    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Section::make('Thông tin website')
                ->schema([
                    TextInput::make('name')
                        ->label('Tên website')
                        ->required()
                        ->placeholder('Nhập tên website'),
                    
                    RichEditor::make('description')
                        ->label('Mô tả')
                        ->placeholder('Nhập mô tả website')
                      ,

                    FileUpload::make('main_image')
                        ->label('Ảnh chính')
                        ->maxSize(10000000)
                        ->multiple()
                        ->image()
                        ->required(),

                    FileUpload::make('thumbnail')
                        ->label('Ảnh thumbnail')
                        ->image(),
                    
                    TextInput::make('field')
                        ->label('Lĩnh vực')
                        ->placeholder('Nhập lĩnh vực website'),

                    TagsInput::make('technologies')
                        ->label('Công nghệ sử dụng (tags)')
                        ->placeholder('Nhập các công nghệ, phân tách bởi dấu phẩy'),

                    TextInput::make('website_url')
                        ->label('URL website')
                        ->url()
                        ->placeholder('Nhập URL của website'),
                    
                    Select::make('category_id')
                        ->label('Danh mục')
                        ->options(Category::all()->pluck('name', 'id'))
                        ->searchable()
                        ->placeholder('Chọn danh mục'),
                ]),

            Section::make('Thẻ (Tags)')
                ->schema([
                    Select::make('tags')
                        ->label('Thẻ')
                        ->multiple()
                        ->relationship('tags', 'name') // Liên kết tới bảng tags
                        ->searchable()
                        ->preload()
                        ->placeholder('Chọn thẻ liên quan'),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            TextColumn::make('id')->label('ID')->sortable(),
            TextColumn::make('name')->label('Tên website')->searchable(),
            ImageColumn::make('main_image')->label('Ảnh chính')->sortable(),
            TextColumn::make('field')->label('Lĩnh vực'),
            TextColumn::make('category.name')->label('Danh mục'),
            TextColumn::make('website_url')->label('URL') ,
            TextColumn::make('created_at')->label('Ngày tạo')->dateTime(),
        ])
        ->actions([
            EditAction::make(),
            ForceDeleteAction::make(),
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
            'index' => Pages\ListWebsites::route('/'),
            'create' => Pages\CreateWebsite::route('/create'),
            'edit' => Pages\EditWebsite::route('/{record}/edit'),
        ];
    }
}
