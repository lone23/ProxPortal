@extends('layouts.app')

@section('title', 'Accedi')

@section('content')
<div class="bg-white rounded-xl shadow-md border border-slate-200 p-8">
    <div class="flex items-start justify-between mb-6">
        <div>
            <p class="text-xs uppercase tracking-wide text-indigo-500 font-semibold">Bentornato</p>
            <h1 class="text-2xl font-bold text-slate-900">Accedi al tuo account</h1>
            <p class="text-sm text-slate-600 mt-1">Se hai un account admin verrai reindirizzato al pannello amministratore, altrimenti al dashboard utente.</p>
        </div>
        <div class="hidden sm:flex items-center justify-center w-12 h-12 rounded-lg bg-indigo-50 text-indigo-500 font-semibold">→</div>
    </div>

    @if ($errors->any())
        <div class="mb-4 rounded-lg border border-red-100 bg-red-50 p-4 text-sm text-red-700">
            <ul class="list-disc list-inside space-y-1">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('login.post') }}" class="space-y-4">
        @csrf
        <div>
            <label class="block text-sm font-medium text-slate-700">Email</label>
            <input type="email" name="email" class="mt-1 w-full rounded-lg border-slate-300 focus:border-indigo-500 focus:ring-indigo-500" required autofocus>
        </div>
        <div>
            <label class="block text-sm font-medium text-slate-700">Password</label>
            <input type="password" name="password" class="mt-1 w-full rounded-lg border-slate-300 focus:border-indigo-500 focus:ring-indigo-500" required>
        </div>
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-2">
                <input type="checkbox" name="remember" id="remember" class="rounded border-slate-300 text-indigo-600 focus:ring-indigo-500">
                <label for="remember" class="text-sm text-slate-700">Ricordami</label>
            </div>
            <a href="{{ route('register') }}" class="text-sm text-indigo-600 hover:text-indigo-500">Crea un account</a>
        </div>
        <button type="submit" class="w-full rounded-lg bg-indigo-600 px-4 py-2 text-white font-medium hover:bg-indigo-700">Accedi</button>
    </form>
</div>
@endsection
