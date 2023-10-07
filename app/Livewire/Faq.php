<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Component;
use App\Models\Faq as FaqModel;

class Faq extends Component
{
    public function render(): View
    {
        $faqs = FaqModel::all();

        return view('livewire.faq', compact('faqs'));
    }
}
