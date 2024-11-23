<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News_Requests;

class NewsController extends Controller{ 

    public function __construct(){
    
        $this->middleware('admin');
    }

    function store(Request $requesr){
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'is_restricted' => 'boolean',
            'age_limit' => 'nullable|integer',
            'attachment_path' => 'nullable|string|max:255'
        ]);
    }

}
