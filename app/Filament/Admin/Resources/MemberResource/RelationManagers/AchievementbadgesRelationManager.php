<?php

namespace App\Filament\Admin\Resources\MemberResource\RelationManagers;

use App\Models\AchievementBadge;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Actions\AttachAction;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;

class AchievementbadgesRelationManager extends RelationManager
{
    protected static string $relationship = 'achievementbadges';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                DatePicker::make('date_of_acceptance')
                    ->translateLabel()
                    ->format('d.m.Y')
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->translateLabel(),
                Tables\Columns\TextColumn::make('name')
                    ->label('Achievement Badges')
                    ->translateLabel(),
                Tables\Columns\TextColumn::make('level')
                    ->translateLabel(),
                Tables\Columns\TextColumn::make('date_of_acceptance')
                    ->translateLabel()
                    ->date('d.m.Y'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\AttachAction::make()
                    ->preloadRecordSelect()
                    ->form(fn (AttachAction $action): array => [
                        $action->getRecordSelect()
                            ->options(AchievementBadge::all()->pluck('full_name', 'id')),
                        Forms\Components\DatePicker::make('date_of_acceptance')
                            ->translateLabel()
                            ->required()
                            ->displayFormat('d.m.Y')
                            ->locale('de')
                            ->maxDate(now()),
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                ->form([
                    Forms\Components\DatePicker::make('date_of_acceptance')
                        ->translateLabel()
                        ->required()
                        ->displayFormat('d.m.Y')
                        ->locale('de')
                        ->maxDate(now()),
                ]),
                Tables\Actions\DetachAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([]),
            ]);
    }

    public function getTableHeading(): string
    {
        return __('Achievement Badges');
    }

    public static function getTitle(Model $ownerRecord, string $pageClass): string
    {
        return __('Achievement Badges');
    }
}
