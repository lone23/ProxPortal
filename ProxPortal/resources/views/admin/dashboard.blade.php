@extends('layout')

@section('content')
    <div class="flex items-center justify-between mb-8">
        <div>
            <p class="text-sm text-slate-500">Pannello amministratore</p>
            <h1 class="text-3xl font-bold text-slate-900">Dashboard Admin</h1>
        </div>
        <span class="px-3 py-1 rounded-full bg-blue-100 text-blue-800 text-sm font-semibold">Admin</span>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-5">
            <p class="text-sm text-slate-500">Utenti attivi</p>
            <p class="text-3xl font-bold text-slate-900">24</p>
            <p class="text-xs text-green-600 mt-1">+4 questa settimana</p>
        </div>
        <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-5">
            <p class="text-sm text-slate-500">Ticket aperti</p>
            <p class="text-3xl font-bold text-slate-900">5</p>
            <p class="text-xs text-slate-500 mt-1">Controlla le priorità</p>
        </div>
        <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-5">
            <p class="text-sm text-slate-500">Nuove richieste</p>
            <p class="text-3xl font-bold text-slate-900">12</p>
            <p class="text-xs text-slate-500 mt-1">Ultimo aggiornamento 10 min fa</p>
        </div>
    </div>
@endsection
