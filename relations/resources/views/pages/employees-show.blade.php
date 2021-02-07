@extends('layouts.main-layout')
@section('content')
<h1>
    {{$employee -> name}}
    {{$employee -> lastname}}
    {{$employee -> date_of_birth}}
</h1>

<ul>
    {{-- @foreach ($employee -> tasks as $task) 
    <li>
        [{{$task -> priority}}]:
        {{$task -> title}}<br>
        {{$task -> description}}
    </li>
    @endforeach --}}
    {{-- creo un foreach per collegare gli employee alle task --}}
    
</ul>

@endsection
