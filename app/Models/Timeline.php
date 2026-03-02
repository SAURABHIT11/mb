<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Timeline extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'subtitle',
        'year_range',
        'color',
        'sort_order',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
