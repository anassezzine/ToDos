@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto py-12 px-6">
    <div class="bg-white p-6 rounded shadow">
        <h2 class="text-xl font-bold mb-6 text-gray-800">📝 Ajouter une nouvelle tâche</h2>

        @if ($errors->any())
        <div class="mb-4 text-red-600 bg-red-100 p-4 rounded">
            <ul class="list-disc list-inside text-sm">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('todos.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Titre</label>
                <input type="text" name="title" id="title" value="{{ old('title') }}"
                       class="mt-1 block w-full rounded border-gray-300 shadow-sm focus:ring focus:ring-indigo-200" required>
            </div>

            <div class="flex gap-4">
                <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">
                    ✅ Créer
                </button>
                <a href="{{ route('todos.index') }}" class="px-4 py-2 bg-gray-300 text-gray-800 rounded hover:bg-gray-400">
                    ❌ Annuler
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
