@extends('layouts.main-layout')
@section('content')
<h1>
    {{$type -> name}}
</h1>
<span>Description: {{$type -> description}}</span>
<ul>
    @foreach ($type -> tasks as $task)
    <li>
        {{$task -> employee -> name}}
        {{$task -> employee -> name}}
        {{$task -> name}}
    </li>
    
    @endforeach
</ul>



@endsection