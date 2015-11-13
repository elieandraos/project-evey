<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'description', 'homepage_url', 'github_url', 'user_id'];

	
	public function categories()
	{
		return $this->belongsToMany('App\Models\Category');
	}

	public function user()
	{
		return $this->belongsTo('App\Models\User');
	}
}
