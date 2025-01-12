<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Filament\Resources\BlogResource\RelationManagers;
use App\Filament\Resources\BlogTagsRelationManagerResource\RelationManagers\BlogTagsRelationManager;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogTag; // Import model BlogTag
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel  = 'Bài viết'; // Tiêu đề sidebar

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Tiêu đề bài viết')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true) // Kích hoạt reactive khi mất focus
                    ->afterStateUpdated(function (\Filament\Forms\Set $set, $state) {
                        // Tự động tạo slug từ name khi mất focus
                        $set('slug', \Illuminate\Support\Str::slug($state));
                    }),
                    Forms\Components\TextInput::make('subtitle') // Thêm trường cho tiêu đề phụ
                    ->label('Tiêu đề phụ')
                    ->nullable() // Có thể không có
                    ->maxLength(255),
                Forms\Components\TextInput::make('slug')
                    ->label('Slug')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(function (Forms\Set $set, $state) {
                        $set('slug', \Illuminate\Support\Str::slug($state));
                    }),
                  
                Forms\Components\Select::make('category_id')
                    ->label('Danh mục')
                    ->required()
                    ->options(BlogCategory::all()->pluck('name', 'id')) // Lấy danh sách danh mục

                    ->searchable(), // Cho phép tìm kiếm
                    Forms\Components\FileUpload::make('thumbnail') // Thêm trường tải ảnh thumbnail
                    ->label('Ảnh thumbnail')
                    ->required() // Nếu muốn bắt buộc
                    ->image() // Đảm bảo chỉ tải ảnh
                    ->maxSize(1024), // Kích thước tối đa (1MB)
                    Forms\Components\FileUpload::make('image') // Thêm trường tải ảnh
                    ->label('Ảnh bài viết')
                    ->required() // Nếu muốn bắt buộc
                    ->image() // Đảm bảo chỉ tải ảnh
                    ->maxSize(1024), // Kích thước tối đa (1MB)
                Forms\Components\Textarea::make('short_description')
                    ->label('Mô tả ngắn')
                    ->required()
                    ->columnSpanFull(),
                    Forms\Components\RichEditor::make('content') // Sử dụng Rich Editor cho nội dung
                    ->label('Nội dung')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('views')
                    ->label('Số lượt xem')
                    ->required()
                    ->numeric()
                    ->default(0),

                Forms\Components\TextInput::make('comments')
                    ->label('Số bình luận')
                    ->required()
                    ->numeric()
                    ->default(0),

                Forms\Components\Select::make('tags') // Chọn nhiều thẻ
                    ->label('Thẻ bài viết')
                    ->multiple()
                    ->relationship('tags', 'name') // Tạo mối quan hệ với model BlogTag
                    ->preload() // Tải trước để cải thiện hiệu suất
                    ->options(BlogTag::all()->pluck('name', 'id')), // Lấy danh sách thẻ
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('thumbnail') // Cột ảnh thumbnail
                ->label('Ảnh thumbnail')
                ->square() // Định dạng ảnh vuông
                ->height(50) // Chiều cao ảnh
                ->width(50) // Chiều rộng ảnh
                ->sortable(),
                Tables\Columns\TextColumn::make('title')
                    ->label('Tiêu đề')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->label('Slug')
                    ->searchable(),

                Tables\Columns\TextColumn::make('category.name')
                    ->label('Danh mục')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('views')
                    ->label('Số lượt xem')
                    ->sortable(),
                Tables\Columns\TextColumn::make('comments')
                    ->label('Số bình luận')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Ngày tạo')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Ngày cập nhật')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(), // Action xem
                Tables\Actions\EditAction::make(), // Action chỉnh sửa
                Tables\Actions\DeleteAction::make(), // Action xóa
                Tables\Actions\Action::make('clone') // Action clone
                ->label('Clone') // Nhãn cho action clone
                ->action(function (Blog $record) {
                    // Logic để clone bài viết
                    $newBlog = $record->replicate(); // Nhân bản bài viết hiện tại
                    $newBlog->slug = \Illuminate\Support\Str::slug($record->title) . '-' . now()->timestamp; // Tạo slug mới
                    $newBlog->save(); // Lưu bài viết mới
                      // Sao chép mối quan hệ với các thẻ bài viết
        $newBlog->tags()->attach($record->tags->pluck('id')->toArray());
                }),
            
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    // public static function getRelations(): array
    // {
    //     return [
    //         BlogTagsRelationManager::class, // Quản lý mối quan hệ với tags
    //     ];
    // }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
