@extends('layout/layout')

@section('title', 'Show todo')

@section('content')
    <div class="container">

        @include("layout.header")
        
        <h1>Showing todo</h1>

        <div class="jumbotron text-center">
            <h2>{{ $todo->todo }}</h2>
            <p>
                <strong>Description:</strong> {{ $todo->description }}<br>
            </p>
        </div>
    
    </div>   
       
@endsection