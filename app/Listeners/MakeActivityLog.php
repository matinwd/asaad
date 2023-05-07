<?php

namespace App\Listeners;

use App\Repositories\ActivityRepository;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class MakeActivityLog
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     * @param object $event
     * @param ActivityRepository $repository
     */
    public function handle(object $event): void
    {
        app(ActivityRepository::class)->create($event->logData);

    }
}
