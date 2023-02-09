@extends('pages.logged')

@section('create-form')

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
    
@endsection