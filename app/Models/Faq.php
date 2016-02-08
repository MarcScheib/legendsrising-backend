<?php

namespace LegendsRising\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $table = 'faqs';

    public function scopeRecent($query)
    {
        return $query->orderBy('created_at', 'desc');
    }
}
