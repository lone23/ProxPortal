@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('content')
<div class="grid gap-6 md:grid-cols-2">
    <div class="col-span-1 bg-white rounded-xl border border-slate-200 shadow-sm p-6">
        <h1 class="text-xl font-semibold text-slate-900">Benvenuto Admin</h1>
        <p class="text-sm text-slate-600 mt-2">Gestisci utenti, ruoli e viste principali del portale.</p>
        <div class="mt-4 grid gap-3">
            <div class="rounded-lg border border-indigo-100 bg-indigo-50 p-4">
                <p class="text-sm text-indigo-700">Accesso rapido</p>
                <p class="text-xs text-indigo-600">Questa dashboard ti mostra una panoramica per iniziare.</p>
            </div>
            <div class="rounded-lg border border-slate-200 p-4">
                <p class="text-sm font-medium text-slate-800">Statistiche rapide</p>
                <ul class="text-sm text-slate-600 list-disc list-inside space-y-1">
                    <li>Totale utenti registrati</li>
                    <li>Amministratori attivi</li>
                    <li>Ultimi accessi</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-span-1 bg-white rounded-xl border border-slate-200 shadow-sm p-6 flex flex-col justify-between">
        <div>
            <p class="text-sm font-semibold text-slate-900">Azioni veloci</p>
            <p class="text-sm text-slate-600">Crea o aggiorna utenti con pochi clic.</p>
        </div>
        <div class="mt-4 grid grid-cols-2 gap-3">
            <button class="w-full rounded-lg bg-indigo-600 px-4 py-2 text-white text-sm font-medium hover:bg-indigo-700">Nuovo utente</button>
            <button class="w-full rounded-lg border border-indigo-200 text-indigo-700 px-4 py-2 text-sm font-medium hover:bg-indigo-50">Gestisci ruoli</button>
        </div>
    </div>
</div>
@endsection
