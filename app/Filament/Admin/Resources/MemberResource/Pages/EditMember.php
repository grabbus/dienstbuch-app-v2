<?php

namespace App\Filament\Admin\Resources\MemberResource\Pages;

use App\Filament\Admin\Resources\MemberResource;
use Carbon\Carbon;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Contracts\Support\Htmlable;

class EditMember extends EditRecord
{
    protected static string $resource = MemberResource::class;
    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function mutateFormDataBeforeSave(array $data): array
    {
        $data['age'] = $this->calculateAge($data['birthdate']);
        return $data;
    }

    public function calculateAge($birthdate): int
    {
        $birthdate = Carbon::parse($birthdate);
        return $birthdate->age;
    }

    public function getTitle(): string|Htmlable
    {
        return __('Member') . ' - ' . $this->record->getFullNameAttribute();
    }
}
