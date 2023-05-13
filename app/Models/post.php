<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\user;

class post extends Model
{
    use HasFactory;

    protected $fillable = ['title','content','user_id'];

    public function user()
    {
        return $this->belongsTo(user::class);
    }

    public function comment()
    {
        return $this->morphOne(comment::class,'commentlable');
    }

    public function comments()
    {
        return $this->morphMany(comment::class,'commentlable');
    }
}
