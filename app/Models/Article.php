<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'category',
        'body',
        'slug',
        'author',
        'isPublished',
    ];

    public function writer(){
        return $this->belongsTo(User::class, 'author', 'id');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id','id');
    }
    public function likes()
    {
        return $this->hasMany(Like::class, 'post_id', 'id');
    }
    public function views()
    {
        return $this->hasMany(Viewer::class, 'post_id','id');
    }
}
