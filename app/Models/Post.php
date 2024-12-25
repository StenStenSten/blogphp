<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // The attributes that are mass assignable
    protected $fillable = ['title', 'content'];

    
    public $timestamps = true;

    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
