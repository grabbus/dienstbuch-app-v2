<?php

namespace App\Filament\Admin\Resources\AchievementBadgeResource\Pages;

use App\Filament\Admin\Resources\AchievementBadgeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAchievementBadge extends EditRecord
{
    protected static string $resource = AchievementBadgeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
