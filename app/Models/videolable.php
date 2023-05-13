<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class videolable extends Model
{
    use HasFactory;
    protected $fillable = ['title','content'];

    public function tags()
    {
        return $this->morphToMany(videotag::class,'taglable');
    }
}
