@extends('layouts.main')

@section('title', 'Editing ' . $person->name)

@section('content')

    <h1>Editing person {{ $person->name }}</h1>

    {{ Form::model($person, ['method' => 'put', 'route' => ['person.update', $person]]) }}

        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            {{ Form::text('name', null, ['id' => 'name', 'class' => 'form-control']) }}
        </div>

        <p class="text-right"><button type="submit" id="update" class="btn btn-primary">Update person</button></p>

    {{ Form::close() }}

@endsection