<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\AchievementBadgeResource\Pages;
use App\Filament\Admin\Resources\AchievementBadgeResource\RelationManagers;
use App\Models\AchievementBadge;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AchievementBadgeResource extends Resource
{
    protected static ?string $model = AchievementBadge::class;

    protected static ?string $navigationIcon = 'heroicon-o-trophy';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->translateLabel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('level')
                    ->translateLabel()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('image')
                    ->translateLabel()
                    ->image()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->translateLabel(),
                TextColumn::make('name')
                ->translateLabel(),
                TextColumn::make('level')
                    ->translateLabel(),
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
            'index' => Pages\ListAchievementBadges::route('/'),
            'create' => Pages\CreateAchievementBadge::route('/create'),
            'edit' => Pages\EditAchievementBadge::route('/{record}/edit'),
        ];
    }

    public static function getModelLabel(): string
    {
        return __('Achievement Badge');
    }

    public static function getPluralModelLabel(): string
    {
        return __('Achievement Badges');
    }

    public function getTitle(): string
    {
        return __('Achievement Badges');

    }
}
