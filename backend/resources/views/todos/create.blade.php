@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ajouter une tâche</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('todos.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titre</label>
            <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
        </div>
        <button type="submit" class="btn btn-success">Créer</button>
        <a href="{{ route('todos.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
