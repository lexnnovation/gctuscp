<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'comment' => 'required|string|max:1000',
            'project_id' => 'required|exists:projects,id',
        ]);

        $comment = new Comment([
            'comment' => $request->comment,
            'student_id' => auth()->id(), // Assuming 'student_id' is the correct column name
            'project_id' => $request->project_id,
        ]);

        $comment->save();

        return redirect()->back()->with('success', 'Comment added successfully!');
    }
}
