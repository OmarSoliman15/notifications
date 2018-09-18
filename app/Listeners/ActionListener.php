<?php

namespace App\Listeners;

use App\Models\Admin;
use App\Events\Action;
use Illuminate\Support\Facades\Notification;
use App\Notifications\clickActionNotification;

class ActionListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Action  $event
     * @return void
     */
    public function handle(Action $event)
    {
        $admin = Admin::find(1);

        Notification::send($admin,
            new clickActionNotification());
    }
}
