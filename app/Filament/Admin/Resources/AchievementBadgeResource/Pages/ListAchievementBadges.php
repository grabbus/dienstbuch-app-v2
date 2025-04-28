<?php

namespace App\Filament\Admin\Resources\AchievementBadgeResource\Pages;

use App\Filament\Admin\Resources\AchievementBadgeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAchievementBadges extends ListRecords
{
    protected static string $resource = AchievementBadgeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
