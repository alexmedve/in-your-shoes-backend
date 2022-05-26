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
        $author->name = 'Flavian Babciuc';
        $author->avatar_url = asset('/assets/flavian.jpg');
        $author->save();

        $category1 = new Category;
        $category1->name = 'Consulting';
        $category1->save();
        
        $category2 = new Category;
        $category2->name = 'Email marketing';
        $category2->save();

        $category3 = new Category;
        $category3->name = 'UI/UX Design';
        $category3->save();

        $category4 = new Category;
        $category4->name = 'Google Ads';
        $category4->save();
       
        $category5 = new Category;
        $category5->name = 'Seo Optimization';
        $category5->save();
        
        $category6 = new Category;
        $category6->name = 'Project management';
        $category6->save();

        $category7 = new Category;
        $category7->name = 'Webinars';
        $category7->save();

        ////////////
        $article = new Article;
        $article->title = 'Best Practices for e-mail nurturing';
        $article->content = '
            <p>
                Lead nurturing emails allow you to build a relationship with your leads and move them down the sales funnel until they are ready to become a customer. It’s one of the best lead nurturing tactics you can use and an essential part of an email marketing strategy.
                <br>
                <br>
                Why? Because lead nurturing emails radically increase the chances of your leads making a purchase. You no longer have to hope that they will buy your products. Rather, you’ll slowly warm them up until they make that decision.
                A potential customer may have several types of interactions with your business. They may add something to their cart, subscribe to a mailing list, take advantage of a promotion, or set up a meeting with one of your salespeople
                <br>
                <br>
                Lead nurturing is the process of staying in contact with your customer throughout each of these stages. You provide valuable resources, discount codes, or reminders to make a purchase.
                This process is a series of emails, each automatically triggered when the lead takes a certain action.
                <br>
                <br>
                Below, you can find the best practices for a good nurturing strategy:
                <br>
                1) Provide valuable content with expert insights.
                <br>
                2) Focus on one relevant topic per email.
                <br>
                3) Keep it short.
                <br>
                4) Ensure the emails progress naturally.
                <br>
                5) Test your emails and track key metrics.
                <br>
                6) Personalize the emails.
                <br>
                7) Stay consistent to your brand.
                <br>
                <br>
                This article helped you, but still not feeling confident about it? Leave us your contact information and we will make it clear for you!
            </p>
        ';
        $article->cover_url = asset('/assets/email-nurturing.png');
        $article->author_id = $author->id;
        $article->save();

        $categoryHasArticle = new CategoryHasArticles;
        $categoryHasArticle->category_id = $category2->id;
        $categoryHasArticle->article_id = $article->id;
        $categoryHasArticle->save();

        ////////////
        $article = new Article;
        $article->title = 'What is a Marketing consultant and its roles';
        $article->content = '
            <p>
                A marketing consultant is an advisor who works with clients to create and implement marketing strategies.
                <br>
                <br>
                He helps create a detailed marketing plan and identify the appropriate marketing mix of services to get the message out to the target market, while also implementing the marketing strategy. He often helps to monitor and interpret the results for a clear outcome picture.
                <br>
                <br>
                Both small businesses with no marketing experts on staff and large companies with a dedicated marketing department can use the advice of a marketing consultant.
                <br>
                <br>
                We surely fit your needs, or better said, your shoes ;).
            </p>
        ';
        $article->cover_url = asset('/assets/marketing-consultancy.png');
        $article->author_id = $author->id;
        $article->save();

        $categoryHasArticle = new CategoryHasArticles;
        $categoryHasArticle->category_id = $category1->id;
        $categoryHasArticle->article_id = $article->id;
        $categoryHasArticle->save();

        /////////////
        $article = new Article;
        $article->title = 'Inbound Marketing';
        $article->content = '
        <p>
            The inbound methodology is the method of growing your organization by building meaningful, lasting relationships with consumers, prospects, and customers. It’s about valuing and empowering these people to reach their goals at any stage in their journey with you.
        </p>
        ';
        $article->cover_url = asset('/assets/inbound.png');
        $article->author_id = $author->id;
        $article->save();
        
        $categoryHasArticle = new CategoryHasArticles;
        $categoryHasArticle->category_id = $category1->id;
        $categoryHasArticle->article_id = $article->id;
        $categoryHasArticle->save();
    }
}
