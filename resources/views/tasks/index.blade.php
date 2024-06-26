<h1>Lista de tareas</h1>
<a href="/tasks/create">Crear</a>
<ul>
    @foreach ($tasks as $task)
        <li>
         <a href="/tasks/{{ $task->id}}">{{ $task->name }}</a> <form method="post" action="/tasks/{{ $task->id}}/complete">
            @csrf
            @Method("PUT")
            <button type="submit">Completar</button>
         </form>
        </li>
    @endforeach
</ul>   
