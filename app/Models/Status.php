<?php

namespace Chatty\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
	protected $fillable = [
		'body', 'parent_id', 'user_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'user_id');
	}

	public function scopeNotReply($query)
    {
        return $query->whereNull('parent_id');
    }

    public function replies()
    {
        return $this->hasMany('Chatty\Models\Status', 'parent_id');
    }

    public function likes()
    {
    	return $this->morphMany(Like::class, 'likeable');
    }
}
