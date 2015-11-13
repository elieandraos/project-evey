<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends \Kalnoy\Nestedset\Node 
{
    protected $fillable = ['title', 'image'];

	public function posts()
	{
		return $this->belongsToMany('App\Models\Post');
	}

	 /**
     * Get the category full image url (accessor).
     *
     * @param  string  $value
     * @return string
     */
    public function getImageAttribute($value)
    {
        if($value)
        	return asset("images/".$value);
       	else
       		return asset("images/default.png");
    }
}
