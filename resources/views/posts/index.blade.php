@extends('layouts.app')

@section('content')
    <div class="mx-auto max-w-2xl space-y-6">
        @auth
            <x-ui.card>
                <form action="{{ route('posts') }}" method="post" class="space-y-4">
                    @csrf

                    <x-ui.textarea
                        name="body"
                        label="What's on your mind?"
                        rows="4"
                        placeholder="Share your thoughts..."
                    />

                    <div class="flex justify-end">
                        <x-ui.button type="submit">Post</x-ui.button>
                    </div>
                </form>
            </x-ui.card>
        @endauth

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
            <x-ui.card title="No posts yet" subtitle="Be the first to share">
                <p style="color: var(--muted);">Check back soon to see what the community is sharing!</p>
            </x-ui.card>
        @endif
    </div>
@endsection