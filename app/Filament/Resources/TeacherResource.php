<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeacherResource\Pages;
use App\Filament\Resources\TeacherResource\RelationManagers;
use App\Models\Teacher;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TeacherResource extends Resource
{
    protected static ?string $model = Teacher::class;

    protected static ?string $navigationIcon = 'heroicon-s-user-group';
    protected static ?string $navigationGroup = 'Data';
    protected static ?string $navigationLabel = 'Guru';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Akun Guru')
                    ->description('Data ini akan menjadi data untuk login')
                    ->schema([
                        Forms\Components\Select::make('user_id')
                            ->relationship('user', 'name')
                            ->required()
                    ])->columnSpan(1)->aside(),
                Forms\Components\Section::make('Biodata')
                    ->description('Biodata guru')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Nama')
                            ->required(),
                        Forms\Components\Select::make('gender')
                            ->label('Jenis Kelamin')
                            ->options([
                                'L' => 'Laki-laki',
                                'P' => 'Perempuan',
                            ])->required(),
                        Forms\Components\TextInput::make('phone_number')
                            ->label('Nomor HP/WA')
                            ->numeric(),
                        Forms\Components\Textarea::make('address')
                            ->label('Alamat')
                            ->placeholder('Masukkan alamat lengkap'),
                        Forms\Components\FileUpload::make('photo')
                            ->label('Foto')
                            ->directory('teacher')
                            ->image()
                            ->imageEditor(),
                    ])->columnSpan(1)->aside(),
                Forms\Components\Section::make('Deskripsi')
                    ->description('Deskripsi singkat dari guru')
                    ->schema([
                        Forms\Components\RichEditor::make('description')
                            ->label('Deskripsi')
                            ->required(),
                    ])->columnSpan(1)->aside(),
                Forms\Components\Section::make('Spesialisasi')
                    ->description('Spesialisai guru')
                    ->schema([
                       Forms\Components\Select::make('specialization_id')
                           ->multiple()
                           ->relationship('specializations', 'name')
                           ->preload()
                            ->searchable()
                    ])->columnSpan(1)->aside(),
                Forms\Components\Section::make('Pendidikan')
                    ->description('Anda bisa memasukkan multiple pendidikan')
                    ->schema([
                      Forms\Components\Repeater::make('Latar Belakang Pendidikan')
                          ->schema([
                              Forms\Components\TextInput::make('educations.degree')
                                  ->required(),
                              Forms\Components\TextInput::make('educations.fields_of_study')
                                  ->required(),
                              Forms\Components\TextInput::make('educations.institutions_attended')
                                  ->required(),
                          ])
                          ->columns(1)
                    ])->columnSpan(1)->aside(),
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('photo')
                    ->circular(),
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('gender')
                    ->label('JK'),
                Tables\Columns\TextColumn::make('phone_number')
                    ->label('No. HP')
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
            'index' => Pages\ListTeachers::route('/'),
            'create' => Pages\CreateTeacher::route('/create'),
            'edit' => Pages\EditTeacher::route('/{record}/edit'),
        ];
    }
}
