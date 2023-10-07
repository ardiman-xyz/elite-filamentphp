<?php

namespace App\Livewire\Classes;

use App\Models\Classes;
use Livewire\Component;

class Detail extends Component
{
    public $class;

    public function mount($id)
    {
        $this->class = Classes::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.classes.detail');
    }
}
