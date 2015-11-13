<?php namespace Evey\Transformers;

use League\Fractal;
use App\Models\Post;

class PostTransformer extends Fractal\TransformerAbstract
{
	protected $availableIncludes = [ 'user', 'categories' ];

	/**
     * List of resources possible to include
     *
     * @var array
     */
	public function transform(Post $post)
	{
	    return [
            'id'            => (int) $post->id,
	        'title'   		=> $post->title,
	        'description' 	=> $post->description,
	        'homepage' 		=> $post->homepage_url,
	        'github'		=> $post->github_url,
	        'url'			=> route('api.v1.posts.show', $post->id) 
	    ];
	}


	/**
     * Include User
     *
     * @return League\Fractal\ItemResource
     */
    public function includeUser(Post $post)
    {
        $user = $post->user;

        return $this->item($user, new UserTransformer);
    }


    /**
     * Include Categories
     *
     * @return League\Fractal\CollectionResource
     */
    public function includeCategories(Post $post)
    {
        $user = $post->categories;

        return $this->collection($user, new CategoryTransformer);
    }
}