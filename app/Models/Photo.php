<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $uploade = '/images/';
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getPathAttribute($photo)
    {
        return $this->uploade . $photo;
    }

    public function posts()
    {
        return $this->hasMany(Photo::class);
    }
}
