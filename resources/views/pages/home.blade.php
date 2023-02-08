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

@endsection