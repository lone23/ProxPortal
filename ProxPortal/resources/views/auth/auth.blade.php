<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ProxPortal - Accesso</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-slate-100 flex items-center justify-center p-6">
    <div class="max-w-6xl w-full grid grid-cols-1 lg:grid-cols-2 gap-6 items-center">
        <div class="hidden lg:block bg-white/80 backdrop-blur border border-slate-100 shadow-lg rounded-3xl p-10">
            <p class="text-sm uppercase tracking-[0.3em] text-blue-600 font-semibold mb-4">Benvenuto</p>
            <h1 class="text-3xl font-bold text-slate-900 mb-4">ProxPortal</h1>
            <p class="text-slate-600 leading-relaxed">
                Accedi o crea un account per gestire i tuoi accessi. Un design semplice e pulito per iniziare a
                lavorare con il tuo pannello amministrativo o utente.
            </p>
            <div class="mt-8 grid grid-cols-2 gap-4 text-sm text-slate-700">
                <div class="p-4 rounded-2xl bg-blue-50 border border-blue-100">Ruoli dedicati</div>
                <div class="p-4 rounded-2xl bg-slate-50 border border-slate-100">Navigazione intuitiva</div>
                <div class="p-4 rounded-2xl bg-emerald-50 border border-emerald-100">Sicurezza con sessioni protette</div>
                <div class="p-4 rounded-2xl bg-indigo-50 border border-indigo-100">Esperienza semplice e pulita</div>
            </div>
        </div>

        <div class="bg-white shadow-xl rounded-3xl p-10 border border-slate-100 space-y-8">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs uppercase tracking-[0.3em] text-blue-600 font-semibold">Accesso sicuro</p>
                    <p class="text-lg font-semibold text-slate-900">Gestisci ruoli admin e user</p>
                </div>
                <div class="flex -space-x-2">
                    <span class="h-10 w-10 rounded-full bg-blue-600/10 border border-blue-100 flex items-center justify-center text-blue-700 font-semibold">A</span>
                    <span class="h-10 w-10 rounded-full bg-emerald-600/10 border border-emerald-100 flex items-center justify-center text-emerald-700 font-semibold">U</span>
                </div>
            </div>

            @yield('content')
        </div>
    </div>
</body>
</html>
