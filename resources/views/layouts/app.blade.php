<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posty</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header class="mb-5 border-b border-teal-100/70 bg-white/85 backdrop-blur">
        <nav class="page-shell flex flex-col gap-4 py-2 sm:flex-row sm:items-center sm:justify-between">
            <a href="{{ route('home') }}" class="flex items-center gap-2 text-xl font-bold tracking-tight text-slate-800">
                <span class="inline-block rounded-lg bg-teal-700 px-3 py-1 text-sm font-bold text-white">P</span>
                <span class="display-serif">Posty</span>
            </a>

            <div class="flex flex-wrap items-center gap-2 text-sm font-semibold text-slate-700">
                <a href="{{ route('home') }}" class="rounded-lg px-3 py-2 hover:bg-teal-50">Home</a>
                <a href="{{ route('dashboard') }}" class="rounded-lg px-3 py-2 hover:bg-teal-50">Dashboard</a>
                <a href="{{ route('posts') }}" class="rounded-lg px-3 py-2 hover:bg-teal-50">Posts</a>
            </div>

            <div class="flex flex-wrap items-center gap-2">
                @auth
                    <span class="rounded-lg border border-slate-200 bg-slate-50 px-3 py-2 text-sm font-medium text-slate-700">
                        {{ auth()->user()->name }}
                    </span>

                    <form action="{{ route('logout') }}" method="post" class="inline">
                        @csrf
                        <x-ui.button type="submit" variant="ghost">Logout</x-ui.button>
                    </form>
                @endauth

                @guest
                    <a href="{{ route('login') }}">
                        <x-ui.button variant="ghost">Login</x-ui.button>
                    </a>
                    <a href="{{ route('register') }}">
                        <x-ui.button>Register</x-ui.button>
                    </a>
                @endguest
            </div>
        </nav>
    </header>

    <main class="page-shell">
        @yield('content')
    </main>
</body>
</html>
