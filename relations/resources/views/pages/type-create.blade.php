@extends('layouts.main-layout')
@section('content')
<h1>
    NEW TYPOLOGY
</h1>
<form action="#">

    <label for="name">Name</label>
    <input name="name" type="text">
    <br>

    <label for="description">Description</label>
    <input name="decription" type="text">
    <br>

    <label for="tasks[]">Tasks</label>
    @foreach ($tasks as $task)
        <input name="tasks[]" type="checkbox" value="{{$task -> id}}">{{$task -> title}} <br>    
    @endforeach
    <input type="checkbox">

</form>



@endsection