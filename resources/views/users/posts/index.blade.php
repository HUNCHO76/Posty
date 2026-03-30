@extends('layouts.app')

@section('content')
    <div class="mx-auto max-w-2xl space-y-6">
        <x-ui.card-muted>
            <div class="space-y-2">
                <h1 class="display-serif text-3xl font-bold">{{ $user->name }}</h1>
                <p class="text-sm" style="color: var(--muted);">@{{ $user->username }}</p>
            </div>

            <div class="ui-divider"></div>

            <div class="grid grid-cols-3 gap-4 text-center">
                <div>
                    <p class="text-lg font-bold">{{ $posts->total() }}</p>
                    <p class="text-xs" style="color: var(--muted);">{{ Str::plural('Post', $posts->total()) }}</p>
                </div>
                <div>
                    <p class="text-lg font-bold">{{ $user->receivedLikes->count() }}</p>
                    <p class="text-xs" style="color: var(--muted);">{{ Str::plural('Like', $user->receivedLikes->count()) }}</p>
                </div>
                <div>
                    <p class="text-lg font-bold">{{ $user->followers_count ?? 0 }}</p>
                    <p class="text-xs" style="color: var(--muted);">{{ Str::plural('Follower', $user->followers_count ?? 0) }}</p>
                </div>
            </div>
        </x-ui.card-muted>

        @if ($posts->count())
            <div class="space-y-4">
                @foreach ($posts as $post)
                    <x-post :post="$post" />
                @endforeach
            </div>

            <div class="mt-8">
                {{ $posts->links() }}
            </div>
        @else
            <x-ui.card title="No posts yet" subtitle="When {{ $user->name }} shares something, it will appear here">
                <p style="color: var(--muted);">Check back soon!</p>
            </x-ui.card>
        @endif
    </div>
@endsection