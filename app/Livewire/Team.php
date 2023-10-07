<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Team as TeamModel;

class Team extends Component
{
    public function render()
    {
        $teams = TeamModel::latest()->take(4)->get();

        return view('livewire.team', compact('teams'));
    }
}
