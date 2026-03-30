@extends('layouts.app')

@section('content')
    <div class="mx-auto max-w-sm">
        <x-ui.card title="Welcome back" subtitle="Sign in to your account" >
            @if (session('status'))
                <x-ui.alert type="danger" class="mb-4">{{ session('status') }}</x-ui.alert>
            @endif

            <form action="{{ route('login') }}" method="post" class="space-y-5">
                @csrf

                <x-ui.input
                    label="Email"
                    name="email"
                    type="email"
                    placeholder="you@example.com"
                    value="{{ old('email') }}"
                />

                <x-ui.input
                    label="Password"
                    name="password"
                    type="password"
                    placeholder="••••••••"
                />

                <label class="flex items-center gap-2">
                    <input type="checkbox" name="remember" class="h-4 w-4 rounded border-slate-300">
                    <span class="text-sm" style="color: var(--muted);">Remember me</span>
                </label>

                <x-ui.button type="submit" class="w-full">Sign in</x-ui.button>
            </form>

            <div class="ui-divider"></div>

            <p class="text-center text-sm" style="color: var(--muted);">
                Don't have an account?
                <a href="{{ route('register') }}" class="font-semibold" style="color: var(--brand);">Sign up</a>
            </p>
        </x-ui.card>
    </div>
@endsection