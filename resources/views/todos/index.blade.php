@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto p-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-900">📋 Mes Tâches</h1>
        <a href="{{ route('todos.create') }}"
           class="inline-flex items-center gap-2 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-4 py-2 rounded shadow transition">
            ➕ Ajouter une tâche
        </a>
    </div>

    @if (session('success'))
    <div class="mb-4 p-4 bg-green-100 border border-green-300 text-green-800 rounded-lg shadow">
        {{ session('success') }}
    </div>
    @endif

    @if($todos->count())
    <ul class="space-y-4">
        @foreach ($todos as $todo)
        <li class="flex justify-between items-center bg-white border border-gray-200 p-4 rounded-xl shadow-sm hover:shadow-md transition">
            <span class="text-gray-800 text-lg font-medium">{{ $todo->title }}</span>
            <form action="{{ route('todos.destroy', $todo->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="bg-red-500 hover:bg-red-600 text-white px-4 py-1 rounded-lg shadow-sm transition">
                    Supprimer
                </button>
            </form>
        </li>
        @endforeach
    </ul>
    @else
    <p class="text-gray-500 text-center mt-10">Aucune tâche pour le moment 💤</p>
    @endif
</div>
@endsection
