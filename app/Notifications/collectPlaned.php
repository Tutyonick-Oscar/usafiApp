<?php

namespace App\Notifications;


use App\Models\Collect;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\BroadcastMessage;

class collectPlaned extends Notification implements ShouldBroadcast 
{

    use Queueable;
    public $collect;
    public $id;    
    public function __construct( Collect $collect, $id)
    {
        $this->collect = $collect;
        $this->user_id = $id;
    }

    public function via(object $notifiable): array
    {
        return ['database','broadcast'];
    }

   
    // public function toMail(object $notifiable): MailMessage
    // {
    //     return (new MailMessage)
    //                 ->line('The introduction to the notification.')
    //                 ->action('Notification Action', url('/'))
    //                 ->line('Thank you for using our application!');
    // }


    public function toArray(object $notifiable): array
    {
        return [
            'message' => 'une collecte vient d\'être planifiée pour ton avenue',
            'date' => $this->collect->date
        ];
    }

    public function toBroadcast (object $notifiable) : BroadcastMessage
    {
        return new BroadcastMessage([
            'message' => 'une collecte vient d\'être planifiée pour ton avenue',
            'date' => $this->collect->date
        ]);
    }
}
