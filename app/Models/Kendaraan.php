<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    protected $fillable = [
        'name',
        'image',
        'type',
    ];

    public function tikets()
    {
        return $this->hasMany(Tiket::class);
    }
}
