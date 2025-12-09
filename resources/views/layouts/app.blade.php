<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ProxPortal')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 min-h-screen flex flex-col">
    <nav class="bg-white border-b border-slate-200 shadow-sm">
        <div class="max-w-5xl mx-auto px-4 py-3 flex items-center justify-between">
            <div class="text-lg font-semibold text-slate-800">ProxPortal</div>
            <div class="flex items-center gap-2">
                @auth
                    <span class="text-sm text-slate-600">Ciao, {{ auth()->user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="text-sm text-slate-500 hover:text-slate-800">Esci</button>
                    </form>
                @endauth
            </div>
        </div>
    </nav>

    <main class="flex-1 flex items-center justify-center px-4 py-10">
        <div class="w-full max-w-3xl">
            @yield('content')
        </div>
    </main>

    <footer class="bg-white border-t border-slate-200 py-4 text-center text-sm text-slate-500">
        Portale di esempio per login e registrazione con layout semplice.
    </footer>
</body>
</html>
