@extends('layouts.main-layout')

@section('content')
    
    {{-- diagonal welcome landing --}}
    <section class="diagonal">

        <h1>welcome.</h1>
    </section>

    <a href="{{ route('logged')}}">
        <p>
            Go to admin panel
        </p>
    </a>

    <ul>
        @foreach ($projects as $project)
            <li>
                <h4>

                    {{ $project -> name }}
                </h4>

                <p>
                    {{ $project -> description }}
                </p>
                
                <h6>
                    Released:
                    {{ $project -> release_date }}
                </h6>
            </li>
        @endforeach
    </ul>

@endsection