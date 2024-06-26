<h1>Lista de tareas</h1>
<a href="/tasks/create">Crear</a>
<ul>
    @foreach ($tasks as $task)
        <li>
            <a href="/tasks/{{ $task->id }}">{{ $task->name }}</a>
            <form method="POST" action="/tasks/{{ $task->id }}/complete" style="display:inline;">
                @csrf
                @method('delete')
                <button type="submit">Completar</button>
            </form>
        </li>
    @endforeach
</ul>
