<?php

namespace App\View\Components\Admin;

use App\Models\User;
use Illuminate\View\Component;

class NewUsers extends Component
{
    public function __construct()
    {
        //
    }

    public function render()
    {
        $users = User::query()
            ->where('role', 'user')
            ->orderByDesc('id')
            ->limit(10)
            ->get();
        return view('components.admin.new-users', compact('users'));
    }
}
