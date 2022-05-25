<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\CategoryHasArticles;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Article;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $author = new Author;
        $author->name = 'Alex';
        $author->avatar_url = asset('/assets/avatar.jpg');
        $author->save();



        $category = new Category;
        $category->name = 'Cat1';
        $category->save();

        $article = new Article;
        $article->title = 'Art1';
        $article->content = '
        <h1>Title Article</h1> 
        <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis praesentium quod sunt beatae laborum recusandae repellendus! Doloremque animi hic velit voluptates voluptas exercitationem impedit. Possimus eligendi cum nesciunt pariatur inventore! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum repudiandae nam animi vel cum corporis aspernatur distinctio quos, fugit dolorem perferendis alias totam, assumenda pariatur ipsum iure fuga possimus recusandae.
        </p>';
        $article->cover_url = asset('/assets/post-cover.jpg');
        $article->author_id = $author->id;
        $article->save();

        $categoryHasArticle = new CategoryHasArticles;
        $categoryHasArticle->category_id = $category->id;
        $categoryHasArticle->article_id = $article->id;
        $categoryHasArticle->save();

        $article = new Article;
        $article->title = 'Art1';
        $article->content = '
        <h1>Title Article</h1> 
        <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis praesentium quod sunt beatae laborum recusandae repellendus! Doloremque animi hic velit voluptates voluptas exercitationem impedit. Possimus eligendi cum nesciunt pariatur inventore! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum repudiandae nam animi vel cum corporis aspernatur distinctio quos, fugit dolorem perferendis alias totam, assumenda pariatur ipsum iure fuga possimus recusandae.
        </p>';
        $article->cover_url = asset('/assets/post-cover.jpg');
        $article->author_id = $author->id;
        $article->save();

        $categoryHasArticle = new CategoryHasArticles;
        $categoryHasArticle->category_id = $category->id;
        $categoryHasArticle->article_id = $article->id;
        $categoryHasArticle->save();


        $category = new Category;
        $category->name = 'Cat2';
        $category->save();

        $article = new Article;
        $article->title = 'Art1';
        $article->content = '
        <h1>Title Article</h1> 
        <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis praesentium quod sunt beatae laborum recusandae repellendus! Doloremque animi hic velit voluptates voluptas exercitationem impedit. Possimus eligendi cum nesciunt pariatur inventore! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum repudiandae nam animi vel cum corporis aspernatur distinctio quos, fugit dolorem perferendis alias totam, assumenda pariatur ipsum iure fuga possimus recusandae.
        </p>';
        $article->cover_url = asset('/assets/post-cover.jpg');
        $article->author_id = $author->id;
        $article->save();

        $categoryHasArticle = new CategoryHasArticles;
        $categoryHasArticle->category_id = $category->id;
        $categoryHasArticle->article_id = $article->id;
        $categoryHasArticle->save();
        
        $article = new Article;
        $article->title = 'Art1';
        $article->content = '
        <h1>Title Article</h1> 
        <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis praesentium quod sunt beatae laborum recusandae repellendus! Doloremque animi hic velit voluptates voluptas exercitationem impedit. Possimus eligendi cum nesciunt pariatur inventore! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum repudiandae nam animi vel cum corporis aspernatur distinctio quos, fugit dolorem perferendis alias totam, assumenda pariatur ipsum iure fuga possimus recusandae.
        </p>';
        $article->cover_url = asset('/assets/post-cover.jpg');
        $article->author_id = $author->id;
        $article->save();

        $categoryHasArticle = new CategoryHasArticles;
        $categoryHasArticle->category_id = $category->id;
        $categoryHasArticle->article_id = $article->id;
        $categoryHasArticle->save();


        $category = new Category;
        $category->name = 'Cat3';
        $category->save();

        $article = new Article;
        $article->title = 'Art1';
        $article->content = '
        <h1>Title Article</h1> 
        <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis praesentium quod sunt beatae laborum recusandae repellendus! Doloremque animi hic velit voluptates voluptas exercitationem impedit. Possimus eligendi cum nesciunt pariatur inventore! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum repudiandae nam animi vel cum corporis aspernatur distinctio quos, fugit dolorem perferendis alias totam, assumenda pariatur ipsum iure fuga possimus recusandae.
        </p>';
        $article->cover_url = asset('/assets/post-cover.jpg');
        $article->author_id = $author->id;
        $article->save();

        $categoryHasArticle = new CategoryHasArticles;
        $categoryHasArticle->category_id = $category->id;
        $categoryHasArticle->article_id = $article->id;
        $categoryHasArticle->save();
        
        $article = new Article;
        $article->title = 'Art1';
        $article->content = '
        <h1>Title Article</h1> 
        <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis praesentium quod sunt beatae laborum recusandae repellendus! Doloremque animi hic velit voluptates voluptas exercitationem impedit. Possimus eligendi cum nesciunt pariatur inventore! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum repudiandae nam animi vel cum corporis aspernatur distinctio quos, fugit dolorem perferendis alias totam, assumenda pariatur ipsum iure fuga possimus recusandae.
        </p>';
        $article->cover_url = asset('/assets/post-cover.jpg');
        $article->author_id = $author->id;
        $article->save();

        $categoryHasArticle = new CategoryHasArticles;
        $categoryHasArticle->category_id = $category->id;
        $categoryHasArticle->article_id = $article->id;
        $categoryHasArticle->save();
 


        $category = new Category;
        $category->name = 'Cat4';
        $category->save();
     
        $article = new Article;
        $article->title = 'Art1';
        $article->content = '
        <h1>Title Article</h1> 
        <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis praesentium quod sunt beatae laborum recusandae repellendus! Doloremque animi hic velit voluptates voluptas exercitationem impedit. Possimus eligendi cum nesciunt pariatur inventore! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum repudiandae nam animi vel cum corporis aspernatur distinctio quos, fugit dolorem perferendis alias totam, assumenda pariatur ipsum iure fuga possimus recusandae.
        </p>';
        $article->cover_url = asset('/assets/post-cover.jpg');
        $article->author_id = $author->id;
        $article->save();

        $categoryHasArticle = new CategoryHasArticles;
        $categoryHasArticle->category_id = $category->id;
        $categoryHasArticle->article_id = $article->id;
        $categoryHasArticle->save();
        
        $article = new Article;
        $article->title = 'Art1';
        $article->content = '
        <h1>Title Article</h1> 
        <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis praesentium quod sunt beatae laborum recusandae repellendus! Doloremque animi hic velit voluptates voluptas exercitationem impedit. Possimus eligendi cum nesciunt pariatur inventore! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum repudiandae nam animi vel cum corporis aspernatur distinctio quos, fugit dolorem perferendis alias totam, assumenda pariatur ipsum iure fuga possimus recusandae.
        </p>';
        $article->cover_url = asset('/assets/post-cover.jpg');
        $article->author_id = $author->id;
        $article->save();

        $categoryHasArticle = new CategoryHasArticles;
        $categoryHasArticle->category_id = $category->id;
        $categoryHasArticle->article_id = $article->id;
        $categoryHasArticle->save();
    }
}
