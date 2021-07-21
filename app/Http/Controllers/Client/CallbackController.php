<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\CallbackRequest;
use App\Models\Callback;
use App\Notifications\CallbackMessage;
use Illuminate\Http\Request;

class CallbackController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CallbackRequest $request)
    {
        $record = new Callback();
        $record->name = $request->get('name');
        $record->phone = $request->get('phone');
        $record->message = $request->get('message');
        $record->save();

        foreach (Callback::getUsersForNotifications() as $chatId) {
            $record->telegramChatId = $chatId;
            $record->notify(new CallbackMessage());
        }

        return redirect('/#contact-form')->with('callback', 'Ваша заявка сохранена!');
    }
}
