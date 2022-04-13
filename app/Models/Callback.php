<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

/**
 * App\Models\Callback
 *
 * @property int $id
 * @property string $name
 * @property string $phone
 * @property string|null $message
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|Callback newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Callback newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Callback query()
 * @method static \Illuminate\Database\Eloquent\Builder|Callback whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Callback whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Callback whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Callback whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Callback wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Callback whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
