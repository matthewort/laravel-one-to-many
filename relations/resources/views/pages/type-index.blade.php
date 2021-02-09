@extends('layouts.main-layout')
@section('content')
<h1>
    Typology:
</h1>
<ul>
    @foreach ($types as $type)
    <li>
        {{$type -> name}}
    </li>
    
    @endforeach
</ul>



@endsection