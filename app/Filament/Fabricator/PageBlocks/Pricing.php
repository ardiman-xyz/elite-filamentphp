<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Pricing extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('pricing')
            ->schema([
                TextInput::make('type')
                    ->label('Tipe')
                    ->required(),
                TextInput::make('price')
                    ->label('Harga')
                    ->required(),
                TextInput::make('duration')
                    ->label('Durasi')
                    ->required(),
                Textarea::make('description')
                    ->label('Deskripsi')
                    ->required(),
                Repeater::make('benefits')
                    ->label('Keuntungan')
                    ->schema([
                        TextInput::make('title')
                            ->required()
                    ])

            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
