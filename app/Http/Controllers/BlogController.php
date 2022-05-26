<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Author;
use App\Models\Category;
use App\Models\CategoryHasArticles;
use Illuminate\Http\Request;
use Str;

class BlogController extends Controller
{
    
    public function index() {
        $categories = Category::all();

        return view('admin.blog')->with([
            'categories' => $categories,
        ]);
    }
    
    public function addPost($id = null) {
        if($id) {
            $categories = Category::all();
            $authors = Author::all();
            $article = Article::findOrFail($id);
            
            return view('admin.addPost')->with([
                'categories' => $categories,
                'authors' => $authors,
                'article' => $article,
            ]);
        }

        $categories = Category::all();
        $authors = Author::all();

        return view('admin.addPost')->with([
            'categories' => $categories,
            'authors' => $authors,
        ]);
    }

    public function createPost(Request $request, $id = null) {
        if(!$request->category) {
            return redirect()->back()->with('error', 'Category not set');
        }

        if($id) {
            $article = Article::findOrFail($id);

            $categoryHasArticle = CategoryHasArticles::where('article_id', $id)->get();
            foreach($categoryHasArticle as $cHa) {
                $cHa->delete();
            }
        } else {
            $article = new Article;
        }
        $article->title = $request->title;
        $article->content = $request->content;
        $article->author_id = $request->author_id;
        if($file = $request->file('cover_url')) {
            $random = Str::random(20);
            $file->move(public_path('uploads'), $random.'.'.$file->getClientOriginalExtension());
            
            $article->cover_url = url('uploads').'/'.$random.'.'.$file->getClientOriginalExtension();
        }
        $article->save();

        foreach($request->category as $key=>$category) {
            $categoryHasArticle = new CategoryHasArticles;
            $categoryHasArticle->article_id = $article->id;
            $categoryHasArticle->category_id = $key;
            $categoryHasArticle->save();
        }

        if($id) {
            return redirect()->back()->with('success', 'Post modified'); 
        }
        return redirect('/blog')->with('success', 'Post added');
    }

    public function deleteArticle($id) {
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect('/blog')->with('success', 'Post deleted');
    }
}
