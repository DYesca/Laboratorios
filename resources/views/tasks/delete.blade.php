<h1>Eliminando tarea ID: {{ $task->id }}</h1>
<hr>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/tasks/{{ $task->id }}" method="POST">
    @csrf
    @method('delete')
    <button type="submit">Eliminar</button>
</form>
