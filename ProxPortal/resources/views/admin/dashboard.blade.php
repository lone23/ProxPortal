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
@endsection
