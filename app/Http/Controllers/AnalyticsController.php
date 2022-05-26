<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\Subscriber;
use App\Models\SubscriberSession;
use Illuminate\Http\Request;

class AnalyticsController extends Controller
{
    public function index() {
        $subscribers = Subscriber::all();
        $subscriberSessions = SubscriberSession::all();
        $messages = Message::all();

        return view('admin.analytics')->with([
            'subscribers' => $subscribers,
            'subscriber_sessions' => $subscriberSessions,
            'messages' => $messages,
        ]);
    }
}
