@extends('layouts.main-layout')

@section('content')
    <section class="diagonal">

        <h1>admin panel.</h1>
    </section>

    <ul>
        @foreach ($projects as $project)
            <li>
                Project name:
                {{ $project -> name}}

                <a href="{{ route('project.destroy', $project)}}">DELETE</a>
            </li>
        @endforeach
    </ul>

@endsection