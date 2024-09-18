<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $category_id = $request->has('category_id') ? base64_decode($request->category_id) : null;

        $trending_projects = Project::with(['category', 'student'])
            ->withCount('likes')
            ->orderBy('likes_count', 'desc')
            ->take(5)
            ->get();

        $recent_projects_query = Project::with(['category', 'student'])
            ->latest();

        if ($category_id) {
            $recent_projects_query->where('category_id', $category_id);
        }

        $recent_projects = $recent_projects_query->take(10)->get();
        $categories = Category::all();

        return view('dashboard', compact('trending_projects', 'recent_projects', 'categories'));
    }
}
