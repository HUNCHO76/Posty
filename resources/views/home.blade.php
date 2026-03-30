@extends('layouts.app')

@section('content')
    <div class="mx-auto max-w-2xl">
        <x-ui.card title="Welcome to Posty" subtitle="Share your thoughts with the world">
            <div class="prose prose-sm">
                <p>Posty is a simple social network where you can share thoughts, connect with others, and see what's happening around you.</p>
                <p>
                    @guest
                        <a href="{{ route('login') }}" class="font-semibold" style="color: var(--brand);">Sign in</a>
                        or
                        <a href="{{ route('register') }}" class="font-semibold" style="color: var(--brand);">create an account</a>
                        to get started.
                    @endguest

                    @auth
                        Head to
                        <a href="{{ route('posts') }}" class="font-semibold" style="color: var(--brand);">posts</a>
                        to see what others are sharing, or visit your
                        <a href="{{ route('dashboard') }}" class="font-semibold" style="color: var(--brand);">dashboard</a>
                        to manage your content.
                    @endauth
                </p>
            </div>
        </x-ui.card>
    </div>
@endsection