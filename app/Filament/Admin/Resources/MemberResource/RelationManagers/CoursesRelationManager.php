<?php

namespace App\Filament\Admin\Resources\MemberResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Actions\AttachAction;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\App;

class CoursesRelationManager extends RelationManager
{
    protected static string $relationship = 'courses';

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
                Tables\Columns\TextColumn::make('name')
                    ->label('Course')
                    ->translateLabel(),
                Tables\Columns\TextColumn::make('date_of_acceptance')
                    ->date('d.m.Y')
                    ->translateLabel(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\AttachAction::make()
                    ->preloadRecordSelect()
                    ->form(fn (AttachAction $action): array => [
                        $action->getRecordSelect(),
                        Forms\Components\DatePicker::make('date_of_acceptance')
                            ->translateLabel()
                            ->required()
                            ->displayFormat('d.m.Y')
                            ->locale(App::getLocale())
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
                            ->locale(App::getLocale())
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
        return __('Courses');
    }

    public static function getTitle(Model $ownerRecord, string $pageClass): string
    {
        return __('Courses');
    }
}
