<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    //function for relation

    public function comments()
    {

        return $this->hasMany(Comment::class);
    }
}
