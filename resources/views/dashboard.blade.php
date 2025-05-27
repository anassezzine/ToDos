@extends('layouts.app')

@section('content')


<div class="py-12">
    <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 space-y-4">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                {{ __("You're logged in!") }}
            </div>
        </div>

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6">
                <h3 class="text-lg font-semibold mb-4">Mes Tâches</h3>

                <a href="{{ route('todos.create') }}" class="inline-block mb-4 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                    + Ajouter une tâche
                </a>

                @if($todos->count())
                <ul class="space-y-2">
                    @foreach ($todos as $todo)
                    <li class="flex justify-between items-center bg-gray-100 p-3 rounded">
                        <span>{{ $todo->title }}</span>
                        <form action="{{ route('todos.destroy', $todo->id) }}" method="POST" onsubmit="return confirm('Supprimer cette tâche ?')">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-500 hover:text-red-700">Supprimer</button>
                        </form>
                    </li>
                    @endforeach
                </ul>
                @else
                <p class="text-gray-600">Aucune tâche pour le moment.</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
