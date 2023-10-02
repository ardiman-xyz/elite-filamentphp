<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Livewire\Attributes\Layout;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Contact extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('contact')
            ->schema([
                TextInput::make('heading')
                    ->required(),
                TextInput::make('subtitle')
                    ->required(),
                Textarea::make('description')
                    ->required(),
                Textarea::make('address')->required(),
                TextInput::make('country')->required(),
                TextInput::make('phone_number')
                    ->label('No. Telp')
                    ->required()
                    ->numeric(),
                TextInput::make('email')
                    ->required()
                    ->email()

            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
