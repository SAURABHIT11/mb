<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Award extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'subtitle',
        'sort_order',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
