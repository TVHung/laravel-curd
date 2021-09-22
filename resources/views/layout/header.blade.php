<!DOCTYPE html>
<html>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ URL::to('/') }}">Todo</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="{{ URL::to('/') }}">View All Todo</a></li>
                <li><a href="{{ URL::to('todos/create') }}">Create a todo</a>
            </ul>
        </nav>
    </body>
</html>