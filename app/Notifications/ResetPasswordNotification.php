<?php 

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;
use App\Visitor;
use App\User;
use App\Notifications\ResetPasswordNotification;

 
/**
 * Get the mail representation of the notification.
 *
 * @param  mixed  $notifiable
 * @return \Illuminate\Notifications\Messages\MailMessage
 */
public function toMail($notifiable)
{
    

    $url = url('/login');
 
    return (new MailMessage)
                ->greeting('Hello!')
                ->line('reset your password')
                ->action('profile', $url)
                ->line('Thank you for using our application!');
}