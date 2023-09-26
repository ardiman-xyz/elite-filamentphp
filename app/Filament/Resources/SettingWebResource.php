<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingWebResource\Pages;
use App\Filament\Resources\SettingWebResource\RelationManagers;
use App\Models\WebSetting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SettingWebResource extends Resource
{
    protected static ?string $model = WebSetting::class;

    protected static ?string $navigationGroup = 'Pengaturan';
    protected static ?string $navigationIcon = 'heroicon-o-globe-alt';
    protected static ?string $navigationLabel = 'Web';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Info website')
                    ->schema([
                        Forms\Components\TextInput::make('web_name')
                            ->label('Nama website')
                            ->required(),
                        Forms\Components\TextInput::make('email')
                            ->email()
                            ->required(),
                        Forms\Components\TextInput::make('phone_number')
                            ->numeric()
                            ->label('Nomor telp'),
                        Forms\Components\Textarea::make('address')
                            ->label('Alamat')
                            ->required(),
                    ])->columnSpan(1),
                Forms\Components\Section::make('Meta')
                    ->schema([
                        Forms\Components\Textarea::make('meta_text')
                            ->label('Deskripsi website untuk sso')
                            ->required(),
                        Forms\Components\Textarea::make('map')
                            ->label('Kode google map'),
                        Forms\Components\FileUpload::make('logo')
                            ->image()
                            ->imageEditor()
                            ->required(),
                        Forms\Components\FileUpload::make('icon')
                            ->required(),
                    ])->columnSpan(1)
            ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('web_name')
                    ->label('Nama Webiste'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('phone_number')
                    ->label('No Telp'),
                Tables\Columns\TextColumn::make('address')
                    ->label('Alamat')
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSettingWebs::route('/'),
            'create' => Pages\CreateSettingWeb::route('/create'),
            'edit' => Pages\EditSettingWeb::route('/{record}/edit'),
        ];
    }
}
