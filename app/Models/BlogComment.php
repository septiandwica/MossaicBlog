<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogComment extends Model
{
    use HasFactory;

    protected $table = 'blog_comments';
    protected $fillable = [
        'comment', 
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function getReply(){
        return $this->hasMany(BlogCommentReply::class,'blog_comment_id');
    }
}
