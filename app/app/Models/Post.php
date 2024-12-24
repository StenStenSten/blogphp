<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // The attributes that are mass assignable
    protected $fillable = ['title', 'content'];

    // If your table doesn't have 'created_at' and 'updated_at', set this to false
    public $timestamps = true; // default is true if timestamps are present
}
