@extends('layout')

@section('content')
    <div class="flex items-center justify-between mb-8">
        <div>
            <p class="text-sm text-slate-500">Area personale</p>
            <h1 class="text-3xl font-bold text-slate-900">Dashboard Utente</h1>
        </div>
        <span class="px-3 py-1 rounded-full bg-emerald-100 text-emerald-800 text-sm font-semibold">User</span>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-5">
            <p class="text-sm text-slate-500">Attività</p>
            <p class="text-lg font-semibold text-slate-900 mt-1">Benvenuto nel tuo spazio personale.</p>
            <p class="text-sm text-slate-600 mt-2">Gestisci i tuoi dati, controlla le notifiche e resta aggiornato sulle
                novità del portale.</p>
        </div>
        <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-5">
            <p class="text-sm text-slate-500">Prossimi passi</p>
            <ul class="mt-2 space-y-2 text-sm text-slate-700 list-disc list-inside">
                <li>Aggiorna il tuo profilo</li>
                <li>Verifica le comunicazioni recenti</li>
                <li>Contatta il supporto se hai bisogno di aiuto</li>
            </ul>
        </div>
    </div>
@endsection
