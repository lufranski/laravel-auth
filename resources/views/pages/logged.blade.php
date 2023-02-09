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

                    <a href="">EDIT</a>
                </li>
            @endforeach
        </ul>
    </div>

    <div>
        
        <a href="{{ route('project.create')}}">

            <h5>Add new project.</h5>
        </a>

        {{-- @yield('create-form') --}}
    </div>

@endsection