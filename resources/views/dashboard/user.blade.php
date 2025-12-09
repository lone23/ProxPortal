@extends('layouts.app')

@section('title', 'Dashboard Utente')

@section('content')
<div class="bg-white rounded-xl border border-slate-200 shadow-sm p-6">
    <div class="flex items-center justify-between mb-4">
        <div>
            <p class="text-xs uppercase tracking-wide text-indigo-500 font-semibold">Area utente</p>
            <h1 class="text-2xl font-bold text-slate-900">Benvenuto nella tua dashboard</h1>
            <p class="text-sm text-slate-600 mt-1">Qui puoi trovare un layout pulito per partire subito.</p>
        </div>
        <div class="hidden sm:block rounded-full bg-indigo-50 text-indigo-600 px-4 py-2 text-sm font-medium">Attivo</div>
    </div>

    <div class="grid gap-4 md:grid-cols-3">
        <div class="rounded-lg border border-slate-200 p-4">
            <p class="text-sm font-semibold text-slate-900">Profilo</p>
            <p class="text-sm text-slate-600 mt-1">Aggiorna i tuoi dati personali rapidamente.</p>
        </div>
        <div class="rounded-lg border border-slate-200 p-4">
            <p class="text-sm font-semibold text-slate-900">Notifiche</p>
            <p class="text-sm text-slate-600 mt-1">Rimani aggiornato con un centro notifiche minimale.</p>
        </div>
        <div class="rounded-lg border border-slate-200 p-4">
            <p class="text-sm font-semibold text-slate-900">Supporto</p>
            <p class="text-sm text-slate-600 mt-1">Contatta l'assistenza in modo semplice.</p>
        </div>
    </div>
</div>
@endsection
