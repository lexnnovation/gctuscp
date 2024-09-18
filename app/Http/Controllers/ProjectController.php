<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Comment;
use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function show($id)
    {
        $project = Project::with(['category', 'student'])->findOrFail($id);
        $comments = Comment::where('project_id', $id)->with('user')->latest()->get();

        return view('projects.show', compact('project', 'comments'));
    }

    public function like(Request $request)
    {
        $request->validate(
            ['project_id' => ['required', 'numeric']]
        );

        $query = [
            'project_id' => $request->project_id,
            'student_id' => auth()->id(),
        ];

        $exist = Like::where($query)->exists();

        if ($exist) {
            Like::where($query)->delete();
        } else {
            Like::create($query);
        }

        // total count
        $total =  Like::where([
            'project_id' => $request->project_id,
        ])->count();

        return response()->json([
            'message' => 'success',
            'total_likes' => $total
        ]);
    }

    public function index()
    {
        $projects = Project::with(['category', 'student'])->latest()->paginate(10);
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'budget' => 'required|numeric|min:0',
            'status' => 'required|in:planning,in_progress,completed,on_hold',
        ]);

        $project = Project::create($validatedData);

        return redirect()->route('projects.show', $project->id)->with('success', 'Project created successfully.');
    }

    // Other existing methods...
}
