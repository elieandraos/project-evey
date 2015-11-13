<?php 

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostsTableSeeder extends Seeder {

    public function run()
    {
    	
    	Post::create([
			"title" => "Laravel 5 Fundamentals",
			"description" => "Building web apps with Laravel 5 (screencasts)",
			"homepage_url" => "https://laracasts.com/series/laravel-5-fundamentals",
			"user_id" => 1 
		]);

    	Post::create([
			"title" => "CSS Reference (Codrops)",
			"description" => "An extensive CSS reference with all the important properties and info to learn CSS from the basics",
			"homepage_url" => "http://tympanus.net/codrops/css_reference/",
			"user_id" => 1
		]);

    	Post::create([
			"title" => "Designspiration",
			"description" => "A high level of great design inspiration to share around the world",
			"homepage_url" => "http://designspiration.net/",
			"user_id" => 3 
		]);

    	Post::create([
			"title" => "The Noun Project",
			"description" => "A visual language of icons anyone can understand",
			"homepage_url" => "http://thenounproject.com/",
			"user_id" => 3 
		]);

    	Post::create([
			"title" => "Sweet Alert",
			"description" => "A beautiful replacement for the javascript native alert box",
			"homepage_url" => "http://tristanedwards.me/sweetalert",
			"user_id" => 2
		]);


    	Post::create([
			"title" => "Angular Materials",
			"description" => "The Angular Material project is an implementation of Material Design in Angular.js",
			"homepage_url" => "https://material.angularjs.org",
			"user_id" => 5 
		]);


    	Post::create([
			"title" => "Swiper",
			"description" => "A mobile touch slider with hardware accelerated transitions and amazing native behavior",
			"homepage_url" => "http://www.idangero.us/swiper/",
			"user_id" => 2
		]);

    	Post::create([
			"title" => "Faker",
			"description" => "Faker is a PHP library that generates fake data for you",
			"homepage_url" => "https://github.com/fzaninotto/Faker",
			"user_id" => 1 
		]);

		Post::create([
			"title" => "Count up",
			"description" => "Quickly create animations that display numerical data in a more interesting way.",
			"homepage_url" => "http://inorganik.github.io/countUp.js/",
			"user_id" => 5
		]);

		Post::create([
			"title" => "Font Awesome",
			"description" => "The iconic font and CSS toolkit",
			"homepage_url" => "http://fortawesome.github.io/Font-Awesome/",
			"user_id" => 1
		]);

		Post::create([
			"title" => "Transformicons",
			"description" => "Animated icons, symbols and buttons using SVG and CSS",
			"homepage_url" => "http://www.transformicons.com/",
			"user_id" => 2
		]);

		Post::create([
			"title" => "Intervention",
			"description" => "Open source PHP image handling and manipulation library",
			"homepage_url" => "http://image.intervention.io/",
			"user_id" => 1 
		]);
        
        Post::create([
			"title" => "Recipes with Angular.js",
			"description" => "A community project dedicated to collecting resources for the Angular.js framework. You find here easy to follow cookbook style recipes for issues you are likely to face when working with Angular.js.",
			"homepage_url" => "http://fdietz.github.io/recipes-with-angular-js/",
			"user_id" => 5 
		]);
    }

    /* 
		http://una.im/CSSgram/ 
		http://howtocenterincss.com/
		https://github.com/desandro/imagesloaded
    */

}

?>
