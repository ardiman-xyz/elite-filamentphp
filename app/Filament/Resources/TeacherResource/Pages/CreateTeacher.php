<?php

namespace App\Filament\Resources\TeacherResource\Pages;

use App\Filament\Resources\TeacherResource;
use App\Models\Specialization;
use App\Models\Teacher;
use App\Models\TeacherEducation;
use Filament\Actions;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Repeater;
use Illuminate\Support\Facades\DB;

class CreateTeacher extends CreateRecord
{
    protected static string $resource = TeacherResource::class;

    protected static string $view = 'filament.resources.teacher.pages.create-teacher';


    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Akun Guru')
                    ->description('Data ini akan menjadi data untuk login')
                    ->schema([
                        Select::make('user_id')
                            ->relationship('user', 'name')
                            ->required()
                    ])->columnSpan(1)->aside(),
                Section::make('Biodata')
                    ->description('Biodata guru')
                    ->schema([
                        TextInput::make('name')
                            ->label('Nama')
                            ->required(),
                        Select::make('gender')
                            ->label('Jenis Kelamin')
                            ->options([
                                'L' => 'Laki-laki',
                                'P' => 'Perempuan',
                            ])->required(),
                        TextInput::make('phone_number')
                            ->label('Nomor HP/WA')
                            ->numeric(),
                        Textarea::make('address')
                            ->label('Alamat')
                            ->placeholder('Masukkan alamat lengkap'),
                        FileUpload::make('photo')
                            ->label('Foto')
                            ->directory('teacher')
                            ->image()
                            ->imageEditor(),
                    ])->columnSpan(1)->aside(),
                Section::make('Deskripsi')
                    ->description('Deskripsi singkat dari guru')
                    ->schema([
                        RichEditor::make('description')
                            ->label('Deskripsi')
                            ->required(),
                    ])->columnSpan(1)->aside(),
                Section::make('Spesialisasi')
                    ->description('Spesialisai guru')
                    ->schema([
                        Select::make('specialization_id')
                            ->label('Spesialisasi')
                            ->multiple()
                            ->options(Specialization::all()->pluck('name', 'id'))
                            ->preload()
                            ->searchable()
                    ])->columnSpan(1)->aside(),
                Section::make('Pendidikan')
                    ->description('Anda bisa memasukkan multiple pendidikan')
                    ->schema([
                        Repeater::make('educations')
                            ->relationship('educations')
                            ->schema([
                                TextInput::make('degree')
                                    ->required(),
                                TextInput::make('fields_of_study')
                                    ->required(),
                                TextInput::make('institutions_attended')
                                    ->required(),
                            ])
                            ->columns(1)
                    ])->columnSpan(1)->aside(),
            ])->columns(1);
    }

    protected function getRedirectUrl(): string
    {
        return $this->previousUrl ?? $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Saved successfully';
    }


    public function save()
    {

        try {
            DB::beginTransaction();

            $get = $this->form->getState();

            $teacher = Teacher::create([
                'user_id'       => $get['user_id'],
                'name'          => $get['name'],
                'description'   => $get['description'],
                'photo'         => $get['photo'],
                'gender'        => $get['gender'],
                'phone_number'  => $get['phone_number'],
                'address'       => $get['address'],
            ]);

            if (isset($get['specialization_id'])) {
                if (is_array($get['specialization_id'])) {
                    foreach ($get['specialization_id'] as $specializationId) {
                        $teacher->specializations()->attach($specializationId);
                    }
                }
            }


            if (isset($get['educations'])) {
                if (is_array($get['educations'])) {
                    foreach ($get['educations'] as $education) {
                        $teacherEducation = New TeacherEducation();
                        $teacherEducation->teacher_id             = $teacher->id;
                        $teacherEducation->degree                 = $education['degree'];
                        $teacherEducation->fields_of_study        = $education['fields_of_study'];
                        $teacherEducation->institutions_attended  = $education['institutions_attended'];
                        $teacherEducation->save();
                    }
                }
            }

            DB::commit();

            Notification::make()
                ->title('Saved successfully')
                ->success()
                ->send();

            return redirect()->to('admin/teachers');
        } catch (\Exception $e) {
            DB::rollback();
            throw new \Exception($e->getMessage());
        }

    }
}
