<?php namespace Evey\Transformers;

use League\Fractal;
use App\Models\User;

class UserTransformer extends Fractal\TransformerAbstract
{

	 /**
     * List of resources possible to include
     *
     * @var array
     */
	public function transform(User $user)
	{
	    return [
	        'name'      => $user->name,
	        'email'   	=> $user->email,
	        'username' 	=> $user->username
	    ];
	}

}