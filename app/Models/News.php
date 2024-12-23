<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
