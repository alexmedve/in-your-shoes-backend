<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function blog() {
        $categories = Category::all();
        foreach($categories as $category) {
            foreach($category->articles as $article) {
                $article->author;
                $article->categories;
            }
        }

        return response()->json([
            'categories' => $categories,
        ]);
    }
}
