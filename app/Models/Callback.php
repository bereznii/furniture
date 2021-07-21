<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Callback extends Model
{
    use HasFactory, Notifiable;

    /**
     * @var string
     */
    public $telegramChatId;

    /**
     * @return array
     */
    public static function getUsersForNotifications(): array
    {
        $usersString = config('services.telegram-bot-api.users');

        return isset($usersString)
            ? explode(',', $usersString)
            : [];
    }
}
