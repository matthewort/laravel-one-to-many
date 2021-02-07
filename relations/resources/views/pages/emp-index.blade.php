@extends('layouts.main-layout')
@section('content')
<h1>Employees:</h1>
    <ul>
        @foreach ($emps as $emp)
        <li>
            <a href="{{route('emp-show', $emp -> id)}}"> {{-- colleghiamo index e i suoi contenuti alla show tramite questo a href, inseriamo quindi la route dello show e aggiungiamo $employee -> id con cui associamo l'iesimo elemento $employee all'id. Sul browser vedremo quindi il contenuto dei <li> sotto forma di link cliccabile --}}
                {{ $emp -> name }}
                {{ $emp -> lastname }}
            </a>
        </li>
        @endforeach
    </ul>
@endsection

