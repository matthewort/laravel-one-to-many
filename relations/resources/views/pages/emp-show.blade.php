@extends('layouts.main-layout')
@section('content')
<h1>
    {{$emp -> name}}
    {{$emp -> lastname}}
    {{$emp -> date_of_birth}}
</h1>

<ul>
    <h2>Tasks:</h2>
    @foreach ($emp -> tasks as $task) 
    <li>
        Task: {{ $task -> title }}
        <ul> 
            @foreach ($task -> types as $type)
                <li>
                    <a href="{{route('type-show', $type -> id)}}">
                     Type: {{ $type -> name }} 
                    </a> 
                </li>
            @endforeach
        </ul>
    </li>
    @endforeach
    {{-- creo un foreach per collegare gli employee alle task --}}
    
</ul>

@endsection
