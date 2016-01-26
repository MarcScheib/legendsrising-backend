<?php

namespace LegendsRising\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    const RECENT_NEWS = 5;

    protected $table = 'news';

    public function user()
    {
        return $this->belongsTo('LegendsRising\Models\User');
    }

    public function comments()
    {
        return $this->hasMany('LegendsRising\Models\Comment');
    }

    public function scopeRecent($query)
    {
        return $query->orderBy('created_at', 'desc')->limit(self::RECENT_NEWS);
    }
}
