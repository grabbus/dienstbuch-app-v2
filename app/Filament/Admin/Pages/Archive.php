<?php

namespace App\Filament\Admin\Pages;

use App\Models\Member;
use Filament\Pages\Page;
use Filament\Resources\Components\Tab;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\TextColumn;
use function PHPUnit\Framework\throwException;
use function Symfony\Component\Translation\t;

class Archive extends Page implements HasTable
{
    use InteractsWithTable;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.admin.pages.archive';
    protected static ?int $navigationSort = 4;

    public function table(Table $table): Table
    {
        return $table
            ->query(Member::query()->where('is_archived', true))
            ->striped()
            ->columns([
                TextColumn::make('firstname')
                    ->translateLabel(),
                TextColumn::make('lastname')
                    ->translateLabel(),
                TextColumn::make('date_of_leaving')
                    ->translateLabel()
                    ->date('d.m.Y'),
                TextColumn::make('reason_of_leaving')
                ->translateLabel(),

            ])
            ->filters([
                //
            ])
            ->actions([
                //
            ])
            ->bulkActions([
                //
            ]);
    }

    public function getTitle(): string
    {
        return __('Archive');
    }

    public static function getNavigationLabel(): string
    {
        return __('Archive');
    }
}
