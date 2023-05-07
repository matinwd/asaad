<?php

namespace App\View\Components;

use Illuminate\View\Component;

class UserHeader extends Component
{
    protected $activeMenu;

    public function __construct($activeMenu = 1)
    {
        $this->activeMenu = $activeMenu;
    }

    public function render()
    {
        $activeMenu = $this->activeMenu;

        $authenticatable = auth()->user();
        $activePlan = $authenticatable->active_plan;
        $havePremiumPlan = $authenticatable->have_premium_plan;

        return view('components.user-header', compact('activeMenu', 'authenticatable', 'havePremiumPlan', 'activePlan'));
    }
}
