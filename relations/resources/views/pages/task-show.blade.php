@extends('layouts.main-layout')
@section('content')
<h1>
    [{{$task -> priority}}]
    {{$task -> title}}
    <-- {{$task -> employee -> name}}
    {{$task -> employee -> lastname}} 
</h1>

<span>
    {{$task -> description}}
</span>
{{-- stampo a schermo un employee per ciascuna task --}}
@endsection