<?php

namespace App\View\Components\Admin;

use App\Models\Ticket;
use Illuminate\View\Component;

class NewTickets extends Component
{
    public function __construct()
    {
        //
    }

    public function render()
    {
        $tickets = Ticket::query()
            ->with(['user'])
            ->orderByDesc('id')
            ->limit(10)
            ->get();
        return view('components.admin.new-tickets', compact('tickets'));
    }
}
