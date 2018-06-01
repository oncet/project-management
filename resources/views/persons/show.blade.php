@extends('layouts.main')

@section('title', $person->name)

@section('content')

    <h1 id="name">{{ $person->name }}</h1>

    <div class="card">
        <ul class="list-group list-group-flush">
            <li class="list-group-item" id="name">Name: {{ $person->name }}</li>
        </ul>
    </div>

    <div class="text-right mt-3">
        <a class="btn btn-primary" href="{{ route('person.edit', $person) }}" role="button" >Edit person</a>
    </div>

    {{ Form::open(['route' => ['person.destroy', $person], 'method' => 'delete']) }}
        <button class="btn btn-danger" id="delete" type="submit">Delete</button>
    {{ Form::close() }}

@endsection