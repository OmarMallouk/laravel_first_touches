<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class News extends Model{

    protected $table = 'news';


    protected $fillable = [
        'title', 
        'content', 
        'is_restricted', 
        'age_limit', 
        'attachment_path', 
        'author_id', 
    ];

    protected $attributes = [
        'is_restricted' => false, 
    ];
}
