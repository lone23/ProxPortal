@extends('layouts.app')

@section('title', 'Registrati')

@section('content')
<div class="bg-white rounded-xl shadow-md border border-slate-200 p-8">
    <div class="flex items-start justify-between mb-6">
        <div>
            <p class="text-xs uppercase tracking-wide text-indigo-500 font-semibold">Nuovo accesso</p>
            <h1 class="text-2xl font-bold text-slate-900">Crea il tuo account</h1>
            <p class="text-sm text-slate-600 mt-1">Scegli un ruolo per navigare nelle dashboard dedicate.</p>
        </div>
        <div class="hidden sm:flex items-center justify-center w-12 h-12 rounded-lg bg-green-50 text-green-500 font-semibold">✱</div>
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

    <form method="POST" action="{{ route('register.post') }}" class="space-y-4">
        @csrf
        <div>
            <label class="block text-sm font-medium text-slate-700">Nome completo</label>
            <input type="text" name="name" class="mt-1 w-full rounded-lg border-slate-300 focus:border-indigo-500 focus:ring-indigo-500" required>
        </div>
        <div class="grid gap-4 md:grid-cols-2">
            <div>
                <label class="block text-sm font-medium text-slate-700">Email</label>
                <input type="email" name="email" class="mt-1 w-full rounded-lg border-slate-300 focus:border-indigo-500 focus:ring-indigo-500" required>
            </div>
            <div>
                <label class="block text-sm font-medium text-slate-700">Ruolo</label>
                <select name="role" class="mt-1 w-full rounded-lg border-slate-300 focus:border-indigo-500 focus:ring-indigo-500" required>
                    <option value="user">Utente</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
        </div>
        <div class="grid gap-4 md:grid-cols-2">
            <div>
                <label class="block text-sm font-medium text-slate-700">Password</label>
                <input type="password" name="password" class="mt-1 w-full rounded-lg border-slate-300 focus:border-indigo-500 focus:ring-indigo-500" required>
            </div>
            <div>
                <label class="block text-sm font-medium text-slate-700">Conferma password</label>
                <input type="password" name="password_confirmation" class="mt-1 w-full rounded-lg border-slate-300 focus:border-indigo-500 focus:ring-indigo-500" required>
            </div>
        </div>
        <div class="flex items-center justify-between">
            <a href="{{ route('login') }}" class="text-sm text-indigo-600 hover:text-indigo-500">Hai già un account?</a>
            <button type="submit" class="rounded-lg bg-indigo-600 px-4 py-2 text-white font-medium hover:bg-indigo-700">Registrati</button>
        </div>
    </form>
</div>
@endsection
