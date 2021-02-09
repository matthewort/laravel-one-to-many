@extends('layouts.main-layout')
@section('content')
<h1>
    NEW TYPOLOGY
</h1>
<form action="{{route('type-update', $type -> id)}}" method="POST">

    @csrf
    @method('POST')

    <label for="name">Name</label>
    <input name="name" type="text" value="{{$type -> name}}">
    <br>

    <label for="description">Description</label>
    <input name="description" type="text" value="{{$type -> description}}">
    <br>

    <label for="tasks[]">Tasks</label> <br>
    @foreach ($tasks as $task)
        <input 
        name="tasks[]" 
        type="checkbox" 
        value="{{$task -> id}}"
        @if ($type -> tasks -> contains($task -> id))
            checked
        @endif
        >
        {{$task -> title}} <br>    
    @endforeach

    <input type="submit" value="UPDATE">

</form>



@endsection