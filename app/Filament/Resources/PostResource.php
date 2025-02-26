<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-arrow-up-on-square-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('')->schema([
                    TextInput::make('title')
                        ->label('Название поста')
                        ->placeholder('Египтянне, пирамиды, инопланетяне')
                        ->maxLength(40)
                        ->required(),
                        Select::make('user_id')
                        ->required()
                        ->preload()
                        ->searchable()
                        ->label('Пользователи')
                        ->relationship('user', 'name'),
                    Textarea::make('description')
                        ->label('Описание поста')
                        ->placeholder('2000г до н.э. , инопланетяне ворвались на землю что бы построть пирамиду Хеопса')
                        ->maxLength(40)
                        ->required(),
                    Textarea::make('content')
                        ->label('Контент про инопланетян')
                        ->placeholder('Подробное описание инопланетян')
                        ->required(),
                    Toggle::make('is_active')
                        ->label('Активный пост про инопланетян'),
                    Toggle::make('is_verificate')
                        ->label('Верефецированный пост про инопланетян')
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Название поста'),
                TextColumn::make('description')
                    ->label('Описание поста'),
                ToggleColumn::make('is_acitive')
                    ->label('Активный пост про инопланетян'),
                ToggleColumn::make('is_verificate')
                    ->label('Верефецированный пост про инопланетян')
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
