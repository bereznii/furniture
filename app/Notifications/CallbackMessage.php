<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramChannel;
use NotificationChannels\Telegram\TelegramMessage;

class CallbackMessage extends Notification
{
    use Queueable;

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [TelegramChannel::class];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     */
    public function toTelegram($notifiable)
    {
        foreach ($this->getUsers() as $userId) {
            return TelegramMessage::create()
                ->to($userId)
                ->content("Новая заявка!
*Имя:* _{$notifiable->name}_
*Номер телефона:* _{$notifiable->phone}_
*Комментарий:* _{$notifiable->message}_");
        }
    }

    /**
     * @return array
     */
    private function getUsers(): array
    {
        $usersString = config('services.telegram-bot-api.users');

        return isset($usersString)
            ? explode(',', $usersString)
            : [];
    }
}
