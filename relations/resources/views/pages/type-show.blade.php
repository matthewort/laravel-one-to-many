@extends('layouts.main-layout')
@section('content')
<h1>
    {{$type -> name}}
</h1>
<ul>
    @foreach ($type -> tasks as $task)
    <li>
        {{$task -> title}}
        {{$task -> description}}
        {{$task -> priority}}
    </li>
    
    @endforeach
</ul>



@endsection