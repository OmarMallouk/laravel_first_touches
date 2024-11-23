<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller{ 

    function store(Request $request){
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'is_restricted' => 'boolean',
            'age_limit' => 'nullable|integer',
            'attachment_path' => 'nullable|string|max:255'
        ]);

        $attachmentPath = null;
        if ($request->hasFile('attachment')) {
            $attachmentPath = $request->file('attachment')->store('attachments', 'public'); 
        }


        $news = News::create([
            'title' => $request->title,
            'content' => $request->content,
            'author_id' => auth()->user()->id, 
            'is_restricted' => $request->is_restricted ?? false,
            'age_limit' => $request->age_limit,
            'attachment_path' => $attachmentPath,
        ]);

      
        return response()->json(['message' => 'News created successfully!', 'news' => $news], 201);
    }
    
    public function update(Request $request, $id)
    {
        $news = News::findOrFail($id);

        $news->update([
            'title' => $request->title,
            'content' => $request->content,
            'is_restricted' => $request->is_restricted ?? $news->is_restricted,
            'age_limit' => $request->age_limit ?? $news->age_limit,
            'attachment_path' => $request->attachment_path ?? $news->attachment_path,
        ]);

        return response()->json(['message' => 'News updated successfully!', 'news' => $news]);
    }

      
    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();

        return response()->json(['message' => 'News deleted successfully!']);
    }
}