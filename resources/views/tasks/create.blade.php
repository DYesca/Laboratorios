@extends('components.app-layout')
@section('content')


<h1>Creado una tarea</h1>
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
<form action="/tasks" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name" class="form-control">
        @error('name')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group">
        <label for="description">Descripción</label>
        <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
        @error('description')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Crear tarea</button>
</form>
@endsection