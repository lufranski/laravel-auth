<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

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

        return redirect() -> route('logged');
    }

    public function create(){

        $projects = Project::all();

        return view ('pages.create', compact('projects'));
    }

    public function store(Request $request){

        $data = $request -> validate([

            'name' => 'required|unique:projects,name|string|max:64',
            'description' => 'nullable|string|max:255',
            'main_image' => 'required|unique:projects,main_image|string',
            'release_date' => 'required|date|before:tomorrow',
            'repo_link' => 'required|unique:projects,repo_link|string'
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

    public function edit(Project $project){

        return view ('pages.edit', compact('project'));
    }

    public function update(Request $request, Project $project){

        $data = $request -> validate([

            'name' => 'required|string|max:64',
            'description' => 'nullable|string|max:255',
            'main_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'release_date' => 'required|date|before:tomorrow',
            'repo_link' => 'required|string'
        ]);

        // $img_path = Storage::disk('public') -> put('main_image', $data['main_image']);
        $img_path = Storage::put('uploads', $data['main_image']);
        $data['main_image'] = $img_path;


        $project -> name = $data['name'];
        $project -> description = $data['description'];
        // $project -> main_image = $img_path;
        $project -> main_image = $data['main_image'];
        $project -> release_date = $data['release_date'];
        $project -> repo_link = $data['repo_link'];

        $project -> save();

        return redirect() -> route ('logged');
    }
}
