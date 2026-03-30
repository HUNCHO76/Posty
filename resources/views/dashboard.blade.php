@extends('layouts.app')

@section('content')
    <div class="mx-auto max-w-2xl">
        <x-ui.card title="Your Dashboard" subtitle="Create and manage your posts">
            <p class="mb-4 text-sm" style="color: var(--muted);">Share what's on your mind with the Posty community.</p>

            <form action="{{ route('posts') }}" method="post" class="space-y-4 rounded-xl border border-blue-200 bg-blue-50 p-4">
                @csrf

                <x-ui.textarea
                    name="body"
                    label="What's on your mind?"
                    rows="5"
                    placeholder="Share your thoughts..."
                />

                <div class="flex justify-end gap-2">
                    <x-ui.button type="submit">Post</x-ui.button>
                </div>
            </form>
        </x-ui.card>
    </div>
@endsection