<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;
use App\Visitor;
use App\User;

class addvisitor extends Notification
{
    use Queueable;
    private $visitor;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Visitor $visitor)
    {
        $this->visitor=$visitor;
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
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
 
    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
     public function toDatabase($notifiable)
    {
        return [

            //'data' => $this->details['body']
            'id'=> $this->visitor->id,
            'title'=>'visitor added:',
            'user'=> $this->visitor->full_name,

        ];
    }
}
