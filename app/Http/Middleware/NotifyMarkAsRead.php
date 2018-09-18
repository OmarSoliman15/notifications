<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Notifications\DatabaseNotification;

class NotifyMarkAsRead
{
    /**
     * Mark notification as read when open the link.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (auth()->check()) {
            $notification = DatabaseNotification::find($request->notify_id);

            if ($notification) {
                $notification->markAsRead();
            }
        }

        return $next($request);
    }
}
