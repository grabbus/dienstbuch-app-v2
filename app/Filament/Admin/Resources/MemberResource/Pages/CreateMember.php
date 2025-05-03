<?php

namespace App\Filament\Admin\Resources\MemberResource\Pages;

use App\Filament\Admin\Resources\MemberResource;
use Carbon\Carbon;
use Filament\Resources\Pages\CreateRecord;

class CreateMember extends CreateRecord
{
    protected static string $resource = MemberResource::class;


    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['age'] = $this->calculateAge($data['birthdate']);
        return $data;
    }

    public function calculateAge($birthdate): int
    {
        $birthdate = Carbon::parse($birthdate);
        return $birthdate->age;
    }
    public function getTitle(): string
    {
        return __('Member');
    }
}
