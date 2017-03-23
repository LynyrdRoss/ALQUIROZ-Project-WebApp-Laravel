<?php

namespace App;

use Carbon\Carbon;

class Post extends Model
{
	public function comments()
	{
		return $this->hasMany(Comment::class);
	}

	// $post->user->name
	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function scopeFilter($query, $data)
	{
		if ($month = $data['month'])
		{
		    $query->whereMonth('created_at', Carbon::parse($month)->month);
		}

		if ($year = $data['year'])
		{
		    $query->whereYear('created_at', $year);
		}
	}

	public static function archives()
	{
		return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) Articles')
	        ->groupBy('year', 'month')
	        ->orderByRaw('min(created_at) DESC')
	        ->get()
	        ->toArray();
	}
}
