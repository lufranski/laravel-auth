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

    public function store(Request $request){

        $data = $request -> validate([

            'name' => 'required|string|max:64',
            'description' => 'nullable|text',
            'main_image' => 'required|string',
            'release_date' => 'required|date',
            'repo_link' => 'required|string'
        ]);

        $project = new Project();

        $project -> name = $data['name'];
        $project -> description = $data['description'];
        $project -> main_image = $data['main_image'];
        $project -> release_date = $data['release_date'];
        $project -> repo_link = $data['repo_link'];

        $project -> save();

        return redirect() -> route('logged');
    }
}
