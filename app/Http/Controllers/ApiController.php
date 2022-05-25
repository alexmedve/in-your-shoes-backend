<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function blog($post_id = null) {
        if($post_id) {
            $article = Article::findOrFail($post_id);
            $article->author;
            $article->categories;
            
            return response()->json([
                'success' => true,
                'article' => $article,
            ]);
        }
        $categories = Category::all();
        foreach($categories as $category) {
            foreach($category->articles as $article) {
                $article->author;
                $article->categories;
            }
        }

        return response()->json([
            'success' => true,
            'categories' => $categories,
        ]);
    }
}
