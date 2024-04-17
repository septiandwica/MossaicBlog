<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCommentReply extends Model
{
    use HasFactory;
    protected $table = 'blog_comment_replies';
    protected $fillable = [
        'comment', 
    ];
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
