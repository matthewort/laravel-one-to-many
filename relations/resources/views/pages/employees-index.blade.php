@extends('layouts.main-layout')
@section('content')
<h1>Employees:</h1>
    <ul>
        @foreach ($employees as $employee)

        <li>{{ $employee -> name }}</li>

        @endforeach
    </ul>
@endsection