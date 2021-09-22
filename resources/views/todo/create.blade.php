@extends('layout/layout')

@section('title', 'Create todo')

@section('content')
    <div class="container">

        @include("layout.header")

        <h1>Create a todo</h1>

        {{ HTML::ul($errors->all()) }}

        {{ Form::open(array('url' => '/')) }}

            <div class="form-group">
                {{ Form::label('todo', 'Todo') }}
                {{ Form::text('todo', Input::old('todo'), array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('description', 'Description') }}
                {{ Form::text('description', Input::old('description'), array('class' => 'form-control')) }}
            </div>

            {{ Form::submit('Create the todo!', array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}
    </div>   
       
@endsection