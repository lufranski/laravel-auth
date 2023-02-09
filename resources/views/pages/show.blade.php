@extends('layouts.main-layout')

@section('content')
    <h3>{{ $project -> name }}</h3>

    <p>
        {{ 
            $project -> description
            ? $project -> description
            : '- no description available -' 
        }}
    </p>

    <h5>
        Released on: 
        {{ $project -> release_date }}
    </h5>

    <h6>
        follow the link to find out more:
        <a href="">
            {{ $project -> repo_link}}
        </a>
    </h6>
@endsection