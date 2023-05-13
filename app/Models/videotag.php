<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class videotag extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function post()
    {
        return $this->morphedByMany(videolable::class,'taglable');
    }

    public function videos()
    {
        return $this->morphedByMany(video::class,'taglable');
    }
}
