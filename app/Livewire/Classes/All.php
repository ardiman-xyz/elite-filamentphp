<?php

namespace App\Livewire\Classes;

use App\Models\Classes;
use Illuminate\View\View;
use Livewire\Component;

class All extends Component
{
    public function render(): View
    {
        $classes = Classes::latest()->get();

        return view('livewire.classes.all', compact('classes'));
    }
}
