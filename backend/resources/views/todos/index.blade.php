@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto p-6">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Mes Tâches</h1>

    @if (session('success'))
    <div class="mb-4 p-4 bg-green-100 text-green-800 rounded-lg shadow">
        {{ session('success') }}
    </div>
    @endif

    <div class="mb-6">
        <a href="{{ route('todos.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg shadow">
            + Ajouter une tâche
        </a>
    </div>

    @if($todos->count())
    <ul class="space-y-3">
        @foreach ($todos as $todo)
        <li class="flex items-center justify-between bg-white p-4 rounded-lg shadow-sm border">
            <span class="text-gray-700 font-medium">{{ $todo->title }}</span>
            <form action="{{ route('todos.destroy', $todo->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded shadow">
                    Supprimer
                </button>
            </form>
        </li>
        @endforeach
    </ul>
    @else
    <div class="text-gray-500">Aucune tâche pour le moment.</div>
    @endif
</div>
@endsection
