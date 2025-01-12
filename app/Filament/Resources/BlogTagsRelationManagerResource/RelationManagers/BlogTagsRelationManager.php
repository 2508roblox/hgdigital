<?php

namespace App\Filament\Resources\BlogTagsRelationManagerResource\RelationManagers;

use App\Models\BlogTag;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BlogTagsRelationManager extends RelationManager
{
    protected static string $relationship = 'BlogTags';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('tags') // Chọn nhiều thẻ
                    ->label('Thẻ bài viết')
                    ->multiple()
                    ->relationship('tags', 'name') // Tạo mối quan hệ với model BlogTag
                    ->preload() // Tải trước để cải thiện hiệu suất
                    ->options(BlogTag::all()->pluck('name', 'id')), // Lấy danh sách thẻ
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('Blog Tag')
            ->columns([
                Tables\Columns\TextColumn::make('Blog Tag'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
