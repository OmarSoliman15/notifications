<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ClickActionNotification extends Notification
{
    use Queueable;

    /**
     * The target instance.
     *
     * @var \App\Models\Abstracts\Model
     */
    public $target;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toDatabase($notifiable)
    {
        return [
            'message' => 'Notification created', // trans('notifications.messages.registered', $localed_data = [])
            'localed_data' => [
                'user' => $notifiable->id,
            ],
            'dashboard_route' => 'dashboard.home',
            'route' => 'dashboard.home', // The notification route name for web
        ];
    }
}
