@extends('layout')

@section('content')
    <div class="flex items-center justify-between mb-8">
        <div>
            <p class="text-sm text-slate-500">Pannello amministratore</p>
            <h1 class="text-3xl font-bold text-slate-900">Dashboard Admin</h1>
        </div>
        <span class="px-3 py-1 rounded-full bg-blue-100 text-blue-800 text-sm font-semibold">Admin</span>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-8 text-center text-slate-600">
        <p class="text-lg font-semibold text-slate-900">Contenuti in arrivo</p>
        <p class="mt-2 text-sm">La dashboard admin sarà popolata con dati reali quando disponibili.</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
        <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-5">
            <div class="flex items-center justify-between mb-3">
                <div>
                    <p class="text-sm text-slate-500">Gestione rapida</p>
                    <p class="text-lg font-semibold">Azioni principali</p>
                </div>
                <span class="text-xs px-2 py-1 rounded-full bg-blue-50 text-blue-700">Setup</span>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-sm">
                <button class="w-full p-3 rounded-xl border border-slate-200 hover:border-blue-200 hover:bg-blue-50 text-left font-semibold text-slate-800">Gestisci utenti</button>
                <button class="w-full p-3 rounded-xl border border-slate-200 hover:border-blue-200 hover:bg-blue-50 text-left font-semibold text-slate-800">Imposta ruoli</button>
                <button class="w-full p-3 rounded-xl border border-slate-200 hover:border-blue-200 hover:bg-blue-50 text-left font-semibold text-slate-800">Controlla ticket</button>
                <button class="w-full p-3 rounded-xl border border-slate-200 hover:border-blue-200 hover:bg-blue-50 text-left font-semibold text-slate-800">Reportistica</button>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-5">
            <div class="flex items-center justify-between mb-3">
                <div>
                    <p class="text-sm text-slate-500">Comunicazioni</p>
                    <p class="text-lg font-semibold">Aggiornamenti recenti</p>
                </div>
                <span class="text-xs px-2 py-1 rounded-full bg-emerald-50 text-emerald-700">Live</span>
            </div>
            <ul class="space-y-2 text-sm text-slate-700">
                <li class="flex items-start space-x-2">
                    <span class="mt-0.5 h-2 w-2 rounded-full bg-blue-500"></span>
                    <span>Nuovo utente iscritto come admin.</span>
                </li>
                <li class="flex items-start space-x-2">
                    <span class="mt-0.5 h-2 w-2 rounded-full bg-amber-500"></span>
                    <span>Ticket #194 in attesa di revisione.</span>
                </li>
                <li class="flex items-start space-x-2">
                    <span class="mt-0.5 h-2 w-2 rounded-full bg-emerald-500"></span>
                    <span>Backup completato con successo.</span>
                </li>
            </ul>
        </div>
    </div>
@endsection
