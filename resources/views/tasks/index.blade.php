@extends ('components.app-layout')

@section('content')

<h2 class="display-6 text-center mb-4">Tareas</h2>
<a href="/tasks/create" class="btn btn-outline-primary">Nueva Tarea</a>
<div class="table-responsive">
    <table class="table text-left">
        <thead>
            <tr>
                <th style="width: 5%">ID</th>
                <th style="width: 22%;">Nombre</th>
                <th style="width: 22%;">Prioridad</th>
                <th style="width: 22%;">Completada</th>
                <th style="width: 22%;">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <th scope="row" class="text-start">{{ $task->id }}</th>
                    <th scope="row" class="text-start">
                        <a href='{{ route('tasks.show', $task->id) }}'>{{ $task->name }}</a>
                    </th>
                    <td>
                        <span class="badge text-bg-warning">Media</span>
                    </td>
                    <td>
                        @if ($task->completed)
                            <i class="fa-solid fa-check"></i>
                        @endif
                    </td>
                    <td>
                        <form action="{{ route('tasks.complete', $task->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <button class="btn btn-primary">Completar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection