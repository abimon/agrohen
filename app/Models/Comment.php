<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'post_id',
        'comment'
    ];
    public function article(){
        return $this->belongsTo(Article::class, 'id', 'post_id');
    }
    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
