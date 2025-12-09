<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ProxPortal - Accesso</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-slate-100 flex items-center justify-center p-6">

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
</body>
</html>
