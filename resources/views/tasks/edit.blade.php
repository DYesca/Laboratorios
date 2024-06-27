@extends('components.app-layout')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1 class="mt-4">Editando tarea ID: {{ $task->id }}</h1>
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
                @method('PUT')
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" name="name" id="name" value="{{ $task->name }}" class="form-control">
                    @error('name')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Descripción</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{ $task->description }}</textarea>
                    @error('description')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success">Actualizar</button>
            </form>
        </div>
    </div>
</div>
@endsection