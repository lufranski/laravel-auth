@extends('layouts.main-layout')

@section('content')

<form method="POST" action="{{ route('project.store')}}">
    
    @csrf

    <section class="diagonal">

        <h1>add.</h1>
    </section>

    <label for="name">Project name.</label>
    <input type="text" name="name">

    <label for="description">Project description.</label>
    <input type="text" name="description">

    <label for="main_image">Project screenshot.</label>
    <input type="text" name="main_image">

    <label for="release_date">Project released in.</label>
    <input type="date" name="release_date">

    <label for="repo_link">Project external link.</label>
    <input type="text" name="repo_link">

    <input type="submit" value="ADD">
</form>
    
@endsection