<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
	
	protected $table = 'posts1';


	protected $fillable = ['title','description', 'url'];
}