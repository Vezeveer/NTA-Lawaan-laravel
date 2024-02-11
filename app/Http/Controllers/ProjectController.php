<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\Project;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProjectController extends Controller
{
    // Show Projects
    public function index(){
        Session::flash('activePage', 'index');
        session()->put('activePage', 'f'); // Why did I do this?
        return view('projects.index', [
            'projects' => Project::all(),
            // To sort by the latest... 
            // 'projects' => Project::latest()->get()
            
            // filter by request
            // 'projects' => Project::latest()->filter(request(['tag']))->get()
            
            'activeYear' => DB::table('statuses')->where('active', 1)->value('year'),
            'inactiveYears' => DB::table('statuses')->where('active', '==', 0)->count(),
            'status' => DB::table('statuses')->where('active', 1)->value('status')
        ]);
    }

    // Show Single Project

    // Show Create Project
    public function create(){
        return view('projects.create');
    }
    // Create Project

    // Delete Project
    // Delete Project confirm?

    // Show Edit Project
    // Edit Project
}
