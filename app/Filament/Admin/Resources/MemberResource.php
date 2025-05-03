<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\MemberResource\Pages;
use App\Filament\Admin\Resources\MemberResource\RelationManagers;
use App\Models\Member;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\App;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Placeholder;
class MemberResource extends Resource
{
    protected static ?string $model = Member::class;
    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?int $navigationSort = 1;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Tabs')
                    ->tabs([
                        Tabs\Tab::make('personal')
                            ->translateLabel()
                            ->schema([
                                Section::make()
                                    ->columns([
                                        'sm' => 2,
                                        'xl' => 6,
                                        '2xl' => 8,
                                    ])->schema([
                                Forms\Components\Select::make('salutation')
                                    ->options([
                                        'Herr' => 'Herr',
                                        'Frau' => 'Frau',
                                        'Person' => 'Person',
                                    ])
                                    ->translateLabel()
                                    ->required()
                                    ->columnSpan([
                                        'sm' => 1,
                                        'xl' => 3,
                                        '2xl' => 4,
                                    ]),
                                        Forms\Components\Select::make('gender')
                                            ->options([
                                                'M' => 'Männlich',
                                                'W' => 'Weiblich',
                                                'D' => 'Diverse',
                                            ])
                                            ->translateLabel()
                                            ->required()
                                            ->columnSpan([
                                                'sm' => 1,
                                                'xl' => 3,
                                                '2xl' => 4,
                                            ]),
                                Forms\Components\TextInput::make('firstname')
                                    ->translateLabel()
                                    ->required()
                                    ->maxLength(110)
                                    ->columnSpan([
                                        'sm' => 1,
                                        'xl' => 3,
                                        '2xl' => 4,
                                    ]),
                                Forms\Components\TextInput::make('lastname')
                                    ->translateLabel()
                                    ->required()
                                    ->maxLength(110)
                                    ->columnSpan([
                                        'sm' => 1,
                                        'xl' => 3,
                                        '2xl' => 4,
                                    ]),
                                Forms\Components\DatePicker::make('birthdate')
                                    ->translateLabel()
                                    ->format('d.m.Y')
                                    ->locale(App::getLocale())
                                    ->required()
                                    ->minDate(now()->subYears(100))
                                    ->maxDate(now())
                                    ->displayFormat('d.m.Y')
                                    ->locale(App::getLocale())
                                    ->columnSpan([
                                        'sm' => 1,
                                        'xl' => 3,
                                        '2xl' => 4,
                                    ]),
                                Forms\Components\TextInput::make('birthplace')
                                    ->translateLabel()
                                    ->required()
                                    ->maxLength(255)
                                    ->columnSpan([
                                        'sm' => 1,
                                        'xl' => 3,
                                        '2xl' => 4,
                                    ]),
                                Forms\Components\Hidden::make('age')
                               ]),
                            ]),
                        Tabs\Tab::make('address')
                            ->translateLabel()
                            ->schema([
                                Section::make()
                                    ->columns([
                                        'sm' => 2,
                                        'xl' => 6,
                                        '2xl' => 8,
                                    ])->schema([
                                    TextInput::make('street')
                                        ->translateLabel()
                                        ->required()
                                        ->columnSpan([
                                            'sm' => 1,
                                            'xl' => 5,
                                            '2xl' => 7,
                                        ]),
                                    TextInput::make('house_number')
                                        ->translateLabel()
                                        ->required()
                                        ->maxLength(10)
                                        ->columnSpan([
                                            'sm' => 1,
                                            'xl' => 1,
                                            '2xl' => 1,
                                        ]),
                                    TextInput::make('postal_code')
                                        ->translateLabel()
                                        ->required()
                                        ->maxLength(5)
                                        ->validationMessages([
                                            'maxLength' => 'Die :attribute darf nicht länger als 5 Zeichen lang sein.',
                                        ])
                                        ->columnSpan([
                                            'sm' => 1,
                                            'xl' => 2,
                                            '2xl' => 2,
                                        ]),
                                    TextInput::make('city')
                                        ->translateLabel()
                                        ->required()
                                        ->columnSpan([
                                            'sm' => 1,
                                            'xl' => 4,
                                            '2xl' => 6,
                                        ]),
                                ]),

                            ]),
                        Tabs\Tab::make('contact')
                            ->translateLabel()
                            ->schema([
                                TextInput::make('email')
                                ->translateLabel()
                                ->email(),
                                TextInput::make('phone')
                                    ->translateLabel()
                                    ->tel(),
                                TextInput::make('mobile')
                                    ->translateLabel()
                                    ->tel(),
                            ]),
                    ])
                    ->contained(true)
                    ->persistTab()
                    ->columnSpanFull()
                    ->id('order-tabs'),
            ]);

    }

    public static function table(Table $table): Table
    {
        return $table
            ->striped()
            ->columns([
                Tables\Columns\TextColumn::make('firstname')
                    ->translateLabel(),
                Tables\Columns\TextColumn::make('lastname')
                    ->translateLabel()
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('birthdate')
                    ->translateLabel()
                    ->date('d.m.Y'),
                Tables\Columns\TextColumn::make('age')
                    ->translateLabel()
                    ->sortable()
                    ->searchable(),
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
            RelationManagers\AchievementbadgesRelationManager::class,
            RelationManagers\CoursesRelationManager::class
        ];
    }
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMembers::route('/'),
            'create' => Pages\CreateMember::route('/create'),
            'edit' => Pages\EditMember::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): \Illuminate\Database\Eloquent\Builder
    {
        return parent::getEloquentQuery()->where('age', '<', 18);
    }

    public static function getModelLabel(): string
    {
        return __('Member');
    }

    public static function getPluralModelLabel(): string
    {
        return __('Members');
    }
}
