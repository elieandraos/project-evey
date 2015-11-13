<?php namespace Evey\Transformers;

use League\Fractal;
use App\Models\Category;

class CategoryTransformer extends Fractal\TransformerAbstract
{
	/**
     * List of resources possible to include
     *
     * @var array
     */
	public function transform(Category $category)
	{
	    return [
	    	'id'		=> (int) $category->id,
	        'title'   	=> $category->title,
	        'image' 	=> $category->image,
	        'count'		=> $category->posts->count()
	    ];
	}
}