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

        return view('pages.logged');
    }

    public function show(Project $project){

        return view ('pages.show', compact('project'));
    }
}
