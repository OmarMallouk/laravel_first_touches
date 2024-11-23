<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model{
    protected $table = 'articles';


    protected $fillable = [
        'title', 
        'content', 
        'author_id', 
        'news_request_id', 
    ];


    public function author(){
        return $this->belongsTo(User::class, 'author_id');
    }

    public function newsRequest(){
        return $this->belongsTo(News_Requests::class, 'news_request_id');
    }
}
