<?php 

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder {

    public function run()
    {

		Category::create([
		    'title' => 'Frontend (Web)',
		    'children' => [
		        [ 'title' => 'Maps', 'image' => 'maps.png' ],
		        [ 'title' => 'CSS3', 'image' => 'css3.png' ],
		        [ 'title' => 'UI Elements', 'image' => 'ui.png' ],
		        [ 'title' => 'Icons' ],
		        [ 'title' => 'Social', 'image' => 'social.png' ],
		        [ 'title' => 'Scrolling' ],
		        [ 'title' => 'Lazy Loading' ],
		        [ 'title' => 'Charts', 'image' => 'charts.png' ],
		        [ 'title' => 'Angular', 'image' => 'angular.png' ],
		        [ 'title' => 'Bootstrap', 'image' => 'bootpstrap.png' ],
		        [ 'title' => 'jQuery', 'image' => 'jquery.png' ],
		        [ 'title' => 'Resources', 'image' => 'resources.png']
		    ]
		]);

	  	Category::create([
		    'title' => 'PHP',
		    'children' => [
		        [ 'title' => 'Laravel', 'image' => 'laravel.png' ],
		        [ 'title' => 'Wordpress', 'image' => 'wordpress.png' ],
		        [ 'title' => 'APIs', 'image' => 'api.png'],
		        [ 'title' => 'Packages', 'image' => 'packages.png']
		    ]
		]);

		Category::create([
		    'title' => 'Design',
		    'children' => [
		        [ 'title' => 'Type' ],
		        [ 'title' => 'Drawing' ],
		        [ 'title' => 'Resources' ],
		        [ 'title' => 'Mockups' ],
		        [ 'title' => 'App Icons' ],
		        [ 'title' => 'Lettering' ],
		        [ 'title' => 'Inspirtation' ],
		        [ 'title' => 'UX' ]
		    ]
		]);


		Category::create([
		    'title' => 'Game Development',
		    'children' => [
		        [ 'title' => 'IOS' ],
		        [ 'title' => 'Android' ],
		    ]
		]);

		Category::create([
			'title' => 'This n That'
		]);
        
    }

}

?>
