@extends('layouts.app')

@section('content')
    <div class="mx-auto max-w-2xl">
        <x-ui.card title="Get started" subtitle="Create your Posty account">
            <form action="{{ route('register') }}" method="post" class="grid grid-cols-1 gap-5 md:grid-cols-2">
                @csrf

                <x-ui.input
                    label="Name"
                    name="name"
                    placeholder="John Doe"
                    value="{{ old('name') }}"
                />

                <x-ui.input
                    label="Username"
                    name="username"
                    placeholder="johndoe"
                    value="{{ old('username') }}"
                />

                <x-ui.input
                    label="Email"
                    name="email"
                    type="email"
                    placeholder="you@example.com"
                    value="{{ old('email') }}"
                    class="md:col-span-2"
                />

                <x-ui.input
                    label="Password"
                    name="password"
                    type="password"
                    placeholder="••••••••"
                />

                <x-ui.input
                    label="Confirm password"
                    name="password_confirmation"
                    type="password"
                    placeholder="••••••••"
                />

                <x-ui.button type="submit" class="w-full md:col-span-2">Create account</x-ui.button>
            </form>

            <div class="ui-divider"></div>

            <p class="text-center text-sm" style="color: var(--muted);">
                Already have an account?
                <a href="{{ route('login') }}" class="font-semibold" style="color: var(--brand);">Sign in</a>
            </p>
        </x-ui.card>
    </div>
@endsection