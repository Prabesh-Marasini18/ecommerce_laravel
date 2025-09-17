<?php

namespace App\Filament\Resources\Shops\Schemas;

use DateTime;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Schemas\Schema;

class ShopForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Select::make('status')
                    ->required()
                    ->options([
                        'Pending' => 'Pending',
                        'active' => 'Active',
                        'inactive' => 'Inactive',
                    ]),
                DatePicker::make('expire_date')
                    ->default(null),
            ]);
    }
}
