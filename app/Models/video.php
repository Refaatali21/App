<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function comment()
    {
        return $this->morphOne(comment::class,'commentlable');
    }

    public function comments()
    {
        return $this->morphMany(comment::class,'commentlable');
    }

    public function tags()
    {
        return $this->morphToMany(videotag::class,'taglable');
    }
}
