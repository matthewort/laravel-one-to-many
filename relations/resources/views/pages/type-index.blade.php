@extends('layouts.main-layout')
@section('content')
<h1>
    Typology:
</h1>
<a href="{{route('type-create')}}">CREATE NEW TYPOLOGY</a>
<ul>
    @foreach ($types as $type)
    <li>
        <a href="{{route('type-show', $type -> id)}}">
        {{$type -> name}}
        </a>
    </li>
    
    @endforeach
</ul>



@endsection