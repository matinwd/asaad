<?php

namespace App\View\Components;

use App\Helper;
use Illuminate\View\Component;

class HeaderMenu extends Component
{
    protected $activeMenu;

    public function __construct($activeMenu = 1)
    {
        $this->activeMenu = $activeMenu;
    }

    public function render()
    {
        $activeMenu = $this->activeMenu;
        if (Helper::isScopeAdmin())
            return view('components.header-menu_admin', compact('activeMenu'));
        return view('components.header-menu_user', compact('activeMenu'));
    }
}
