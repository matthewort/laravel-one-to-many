@extends('layouts.main-layout')
@section('content')

<h1>
    [{{$task -> id}}]
    EDIT TASK
</h1>

<form action="" method="POST">

    @csrf
    @method('POST')

    <label for="title">Title</label>
    <input name="title" type="text" value="{{$task -> title}}">
    <br>

    <label for="description">Description</label>
    <input name="description" type="text" value="{{$task -> description}}">
    <br>

    <label for="priority">Priority</label>
    <input name="priority" type="text" value="{{$task -> priority}}">
    <br>

    <label for="employee_id">Employee</label>
    <select name="employee_id">
        @foreach ($emps as $emp)
        <option value="{{$emp -> id}}"
            @if ($task -> employee -> id == $emp -> id)
                selected
            @endif    
            >
            {{$emp -> name}}
            {{$emp -> lastname}}
        </option>
        @endforeach
    </select>
    <br>
    <br>
    <label for="types[]">Typologies</label><br>
    @foreach ($types as $type)
    <input 
        name="types[]" 
        type="checkbox" 
        value="{{$type -> id}}"
        @foreach ($task -> types as $task_type)
            @if ($task_type -> id == $type -> id)
                checked
            @endif
        @endforeach
    > 
        {{$type -> name}} 
        <br>
    @endforeach
    <br>
    <input type="submit" value="SAVE">

</form>
@endsection