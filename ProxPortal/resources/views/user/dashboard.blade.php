@extends('layout')

@section('content')
    <div class="flex items-center justify-between mb-8">
        <div>
            <p class="text-sm text-slate-500">Area personale</p>
            <h1 class="text-3xl font-bold text-slate-900">Dashboard Utente</h1>
        </div>
        <span class="px-3 py-1 rounded-full bg-emerald-100 text-emerald-800 text-sm font-semibold">User</span>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-8 text-center text-slate-600">
        <p class="text-lg font-semibold text-slate-900">Contenuti in arrivo</p>
        <p class="mt-2 text-sm">La dashboard utente sarà popolata con dati reali quando disponibili.</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
        <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-5">
            <p class="text-sm text-slate-500">Link rapidi</p>
            <ul class="mt-2 space-y-2 text-sm text-slate-700">
                <li class="flex items-center justify-between">
                    <span>Aggiorna dati personali</span>
                    <span class="text-xs px-2 py-1 rounded-full bg-slate-100 text-slate-700">Profilo</span>
                </li>
                <li class="flex items-center justify-between">
                    <span>Controlla notifiche</span>
                    <span class="text-xs px-2 py-1 rounded-full bg-blue-50 text-blue-700">Notifiche</span>
                </li>
                <li class="flex items-center justify-between">
                    <span>Supporto dedicato</span>
                    <span class="text-xs px-2 py-1 rounded-full bg-emerald-50 text-emerald-700">Help</span>
                </li>
            </ul>
        </div>
        <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-5 lg:col-span-2">
            <div class="flex items-center justify-between mb-3">
                <div>
                    <p class="text-sm text-slate-500">Timeline</p>
                    <p class="text-lg font-semibold">Attività recenti</p>
                </div>
                <span class="text-xs px-2 py-1 rounded-full bg-amber-50 text-amber-700">Oggi</span>
            </div>
            <div class="space-y-3 text-sm text-slate-700">
                <div class="p-3 rounded-xl border border-slate-100 flex items-start space-x-3">
                    <span class="h-8 w-8 rounded-full bg-blue-50 text-blue-700 flex items-center justify-center font-semibold">1</span>
                    <div>
                        <p class="font-semibold">Hai completato la verifica email</p>
                        <p class="text-slate-500">Ora puoi ricevere notifiche e aggiornamenti.</p>
                    </div>
                </div>
                <div class="p-3 rounded-xl border border-slate-100 flex items-start space-x-3">
                    <span class="h-8 w-8 rounded-full bg-emerald-50 text-emerald-700 flex items-center justify-center font-semibold">2</span>
                    <div>
                        <p class="font-semibold">Hai aggiornato il profilo</p>
                        <p class="text-slate-500">Controlla che i dati siano corretti.</p>
                    </div>
                </div>
                <div class="p-3 rounded-xl border border-slate-100 flex items-start space-x-3">
                    <span class="h-8 w-8 rounded-full bg-indigo-50 text-indigo-700 flex items-center justify-center font-semibold">3</span>
                    <div>
                        <p class="font-semibold">Hai aperto un ticket di supporto</p>
                        <p class="text-slate-500">Riceverai una risposta entro 24h.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
