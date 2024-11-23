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

        $news = News::create([
            'title' => $request->title,
            'content' => $request->content,
            'author_id' => auth()->user()->id, 
            'is_restricted' => $request->is_restricted ?? false,
            'age_limit' => $request->age_limit,
            'attachment_path' => $request->attachment_path,
        ]);

        return response()->json(['message' => 'News created successfully!', 'news' => $news], 201);
    }
    
    function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'is_restricted' => 'boolean',
            'age_limit' => 'nullable|integer',
            'attachment_path' => 'nullable|string|max:255'
        ]);

        $news = News::findOrFail($id);
        $news->update([
            'title' => $request->title,
            'content' => $request->content,
            'is_restricted' => $request->is_restricted ?? false,
            'age_limit' => $request->age_limit,
            'attachment_path' => $request->attachment_path,
        ]);

        return response()->json(['message' => 'News updated successfully!', 'news' => $news]);
    }

}
