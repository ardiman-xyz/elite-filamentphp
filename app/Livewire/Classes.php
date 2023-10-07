<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Classes as ClassesModel;

class Classes extends Component
{
    public function render()
    {
        $classes = ClassesModel::latest()->take(3)->get();

        return view('livewire.classes', compact('classes'));
    }
}
