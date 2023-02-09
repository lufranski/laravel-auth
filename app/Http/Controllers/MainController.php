<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;

class MainController extends Controller
{
    public function home(){

        $projects = Project::orderBy('created_at') -> get();

        return view ('pages.home', compact('projects'));
    }

    public function logged(){

        $projects = Project::orderBy('created_at') -> get();

        return view('pages.logged', compact('projects'));
    }

    public function show(Project $project){

        return view ('pages.show', compact('project'));
    }

    public function destroy(Project $project){

        $project -> delete();

        return redirect() -> route('home');
    }

    public function create(){

        $projects = Project::all();

        return view ('pages.create', compact('projects'));
    }
}
