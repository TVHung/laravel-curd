@extends('layout/layout')

@section('title', 'Todo App')

@section('content')
    <div class="container">

        @include("layout.header")
        
        <h1>All the todos</h1>
        
        <!-- will be used to show any messages -->
        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif
        
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Todo</td>
                    <td>Description</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody>
                @foreach($todos as $key => $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->todo }}</td>
                    <td>{{ $value->description }}</td>
        
                    <td>
                        {{ Form::open(array('url' => 'todos/' . $value->id, 'class' => 'pull-right', 'style' => 'margin-left: 0px')) }}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::submit('Delete this todo', array('class' => 'btn btn-warning')) }}
                        {{ Form::close() }}
                        <a class="btn btn-small btn-success pull-right" style="margin-right: 10px" href="{{ URL::to('todos/' . $value->id) }}">Show this todo</a>
                        <a class="btn btn-small btn-info pull-right" style="margin-right: 10px" href="{{ URL::to('todos/' . $value->id . '/edit') }}">Edit this todo</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    
    </div>
@endsection