<?php

namespace App\Livewire\Team;

use App\Models\Team;
use Illuminate\View\View;
use Livewire\Component;

class All extends Component
{
    public function render(): View
    {
        $teams = Team::latest()->get();

        return view('livewire.team.all', compact('teams'));
    }
}
