<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\Subscriber;
use App\Models\SubscriberSession;
use Illuminate\Http\Request;
use Str;
use Validator;

class SessionController extends Controller
{
    public function getKey() {
        $subscriberSession = new SubscriberSession;
        $subscriberSession->key = Str::random(20);
        $subscriberSession->save();

        return response()->json([
            'session_key' => $subscriberSession->key,
        ]);
    }

    public function updateForm(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:191',
            'company' => 'required|string|max:191', 
            'email' => 'required|email|max:191',
            'phone' => 'required|string|max:191',
            'message' => 'required|string|max:1000',
            'newsletter' => 'required|boolean',
            'session_key' => 'required|string|max:21',
        ]);

        if($validator->fails()) {
            return response()->json([
                'success' => false, 
                'message' => 'Make sure all inputs are filled',
            ], 400);
        }

        $subscriberSession = SubscriberSession::where('key', $request->session_key)->first();

        if(!$subscriberSession) {
            return response()->json([
                'success' => false,
                'message' => 'Session seems to be wrong',
            ], 400);
        }

        $message = new Message;
        $message->name = $request->name;
        $message->company = $request->company;
        $message->email = $request->email;
        $message->phone = $request->phone;
        $message->message = $request->message;
        // asociate the message with existing user
        if($subscriberSession && $subscriberSession->subscriber) {
            $message->subscriber_id = $subscriberSession->subscriber_id;
        } else {
            // create subscriber and asociate the message 
            $subscriber = new Subscriber;
            $subscriber->name = $request->name;
            $subscriber->company = $request->company;
            $subscriber->email = $request->email;
            $subscriber->phone = $request->phone;
            $subscriber->newsletter = $request->newsletter;
            $subscriber->save();

            $subscriberSession->subscriber_id = $subscriber->id;
            $subscriberSession->save();
            
            $message->subscriber_id = $subscriber->id;
        }
        $message->save();

        return response()->json([
            'success' => true,
            'message' => 'Message sent!',
        ], 200);
    }

    public function newsletter(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:191',
        ]);

        if($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Make sure you typed a valid email',
            ], 400);
        }

        $subscriber = Subscriber::where('email', $request->email)->first();
        if(!$subscriber) {
            return response()->json([
                'success' => false, 
                'message' => 'You are not subscribed to our newsletter', 
            ], 400);
        }

        $subscriber->decoded_categories = json_decode($subscriber->categories);
        
        return response()->json([
            'success' => true, 
            'subscriber' => $subscriber,
        ], 200);
    }

    public function updateNewsLetter(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:191',
            'frequency' => 'required|string|max:191',
            'categories' => 'required'
        ]);

        if($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Make sure you typed a valid email',
            ], 400);
        }

        $subscriber = Subscriber::where('email', $request->email)->first();
        if(!$subscriber) {
            return response()->json([
                'success' => false, 
                'message' => 'You are not subscribed to our newsletter', 
            ], 400);
        }

        $subscriber->frequency = $request->frequency;
        $subscriber->categories = $request->categories;
        $subscriber->save();

        $subscriber->decoded_categories = json_decode($subscriber->categories);
        
        return response()->json([
            'success' => true, 
            'subscriber' => $subscriber,
        ], 200);
    }

    public function subscribeToNewsletter(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|max:191',
            'name' => 'required|string|max:191',
            'session_key' => 'required|string|max:21',
        ]);

        if($validator->fails()) {
            return response()->json([
                'success' => false, 
                'message' => 'Make sure all fields are filled',
            ], 400);
        }

        $existingSubscriber = Subscriber::where('email', $request->email)->first();
        if($existingSubscriber) {
            $session = SubscriberSession::where('key', $request->session_key)->first();
            
            if($session) {
                $session->subscriber_id = $existingSubscriber->id;
                $session->save();
            }

            return response()->json([
                'success' => false,
                'message' => 'You are subscribed already',
            ], 400);
        }

        $subscriber = new Subscriber;
        $subscriber->name = $request->name;
        $subscriber->email = $request->email;
        $subscriber->newsletter = true;
        $subscriber->save();

        $session = SubscriberSession::where('key', $request->session_key)->first();
        if($session) {
            $session->subscriber_id = $subscriber->id;
            $session->save();
        }

        return response()->json([
            'success' => true,
            'message' => 'Subscribed to newsletter',
        ]);
    }

    // pages - landing / services / blog / about / contact
    // articles - article id 
    // example: 
    // { 
    //     pages: [
    //         'landing',
    //         'services', 
    //         'blog', 
    //         'about',
    //         'contact',
    //     ],
    //     articles: [
    //         1,
    //         2, 
    //         3,
    //         5,
    //         10,
    //     ],
    // }
    // even if he goes to a specific article send "blog"
    public function updateSession(Request $request) {
        $validator = Validator::make($request->all(), [
            'pages' => 'required|array',
            'articles' => 'required|array',
            'session_key' => 'required|string|max:21'
        ]);

        if($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Make sure the payload format is right',
            ], 400);
        }

        $session = SubscriberSession::where('key', $request->session_key)->first();
            
        if($session) {
            $session->activity = json_encode($request);
            $session->save();

            return response()->json([
                'success' => true,
                'message' => 'Session updated!',
            ], 200);
        }

        return response()->json([
            'success' => false,
            'message' => 'Session seems to be wrong',
        ], 400);
    }
}
