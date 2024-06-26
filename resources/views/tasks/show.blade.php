@extends('components.app-layout')
@section('content')

<h1>Tarea ID: {{ $task->id }}</h1>
<hr>
<h2>{{ $task->name }}</h2>
<p>{{ $task->description }}</p>

<a href="/tasks/{{ $task->id }}/edit" class="btn btn-primary">Editar</a>


<form action="/tasks/{{ $task->id }}" method="POST" style="display:inline;">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-warning">Eliminar</button> 
</form>
@endsection