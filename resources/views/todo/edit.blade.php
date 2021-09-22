@extends('layout/layout')

@section('title', 'Edit todo')

@section('content')
    <div class="container">

        @include("layout.header")

        <h1>Edit todo</h1>

        {{ HTML::ul($errors->all()) }}

        {{ Form::model($todo, array('route' => array('todo.update', $todo->id), 'method' => 'PUT')) }}

            <div class="form-group">
                {{ Form::label('todo', 'Todo') }}
                {{ Form::text('todo', null, array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('description', 'description') }}
                {{ Form::text('description', null, array('class' => 'form-control')) }}
            </div>

            {{ Form::submit('Edit the todo!', array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}
            
    </div>   
       
@endsection