@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Mes Tâches</h1>

    @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('todos.create') }}" class="btn btn-primary mb-3">Ajouter une tâche</a>

    @if($todos->count())
    <ul class="list-group">
        @foreach ($todos as $todo)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $todo->title }}
            <form action="{{ route('todos.destroy', $todo->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm">Supprimer</button>
            </form>
        </li>
        @endforeach
    </ul>
    @else
    <p>Aucune tâche pour le moment.</p>
    @endif
</div>
@endsection
