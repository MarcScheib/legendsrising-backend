<?php

namespace LegendsRising\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    const RECENT_COMMENTS = 5;

    protected $table = 'comments';

    public function user()
    {
        return $this->belongsTo('LegendsRising\Models\User');
    }

    public function scopeRecent($query)
    {
        return $query->orderBy('created_at', 'desc')->limit(self::RECENT_COMMENTS);
    }
}
