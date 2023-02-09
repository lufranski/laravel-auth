@extends('layouts.main-layout')

@section('content')
    <section class="diagonal">

        <h1>admin panel.</h1>
    </section>

    <div>

        <h5>Current projects.</h5>
        <ul>
            @foreach ($projects as $project)
                <li>
                    Project name:
                    {{ $project -> name}}
    
                    <a href="{{ route('project.destroy', $project)}}">DELETE</a>
                </li>
            @endforeach
        </ul>
    </div>

    <div>
        <h5>Add new project.</h5>

        <form method="POST" action="">
        
            <label for="name">Project name.</label>
            <input type="text" name="name">

            <label for="description">Project description.</label>
            <textarea name="description" cols="30" rows="10"></textarea>

            <label for="main_image">Project screenshot.</label>
            <input type="text" name="main_image">

            <label for="release_date">Project released in.</label>
            <input type="date" name="release_date">

            <label for="repo_link">Project external link.</label>
            <input type="text" name="repo_link">

            <input type="submit" value="ADD">
        </form>
    </div>

@endsection