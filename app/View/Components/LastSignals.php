<?php

namespace App\View\Components;

use App\Models\Strategy;
use Illuminate\View\Component;

class LastSignals extends Component
{
    public function __construct()
    {
        //
    }

    public function render()
    {
        $strategies = Strategy::all();
        return view('components.last-signals', compact('strategies'));
    }
}
