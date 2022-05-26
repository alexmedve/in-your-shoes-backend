<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
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

    public function subscriberProfile($subscriber_id) {
        $subscriber = Subscriber::findOrFail($subscriber_id);
        $categories = Category::all();

        $newsletterCategories = [];
        if($subscriber->categories) {
            foreach(json_decode($subscriber->categories) as $category) {
                $cat = Category::find($category);
                if($cat) {
                    array_push($newsletterCategories, $cat);
                }
            }
        }

        foreach($categories as $category) {
            $category->views = 0;
        }

        $subscriber->start_interaction = '';
        $subscriber->end_interaction = '';
        if($subscriber->sessions[0]) {
            $subscriber->start_interaction = $subscriber->sessions[0]->created_at;
            $subscriber->end_interaction = $subscriber->sessions[0]->updated_at;
        }

        foreach($subscriber->sessions as $session) {
            $subscriber->end_interaction = $session->updated_at;

            if($session->activity) {
                $activity = json_decode($session->activity);
                
                if($activity->articles) {
                    $session->activity_decoded = $activity;
                    $articles = [];
                    foreach($activity->articles as $article) {
                        $art = Article::findOrFail($article);

                        foreach($categories as $category) {
                            foreach($art->categories as $cat) {
                                if($cat->id == $category->id) {
                                    $category->views++;
                                    break;
                                }
                            }
                        }

                        array_push($articles, $art);   
                    }
                    $session->articles = $articles;
                } 
            }
        } 

        $categories = $categories->toArray();
        usort($categories, function($a, $b) {return strcmp($b['views'], $a['views']);});

        return view('admin.subscriberProfile')->with([
            'subscriber' => $subscriber,
            'categories' => $categories,
            'newsletterCategories' => $newsletterCategories
        ]);
    }
}
