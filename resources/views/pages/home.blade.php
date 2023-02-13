@extends('layouts.main-layout')

@section('content')
    
    {{-- diagonal welcome landing --}}
    <section class="diagonal">

        <h1>welcome.</h1>
    </section>

    <div class="d-flex justify-content-evenly">
        @foreach ($projects as $project)
            <div class="ms_card">

                <img src="{{ Vite::asset('storage/app/public/' . $project -> main_image) }}" alt="">
                <h4>
                    
                    {{ $project -> name }}
                </h4>
                
                <p>
                    {{ 
                        $project -> description
                        ? $project -> description
                        : '- no description available -' 
                    }}
                </p>
                
                <h6>
                    Released:
                    {{ $project -> release_date }}
                </h6>
                
                <a href="{{ route('project.show', $project)}}">
                    Expand
                </a>
            </div>
        @endforeach
        </div>

@endsection