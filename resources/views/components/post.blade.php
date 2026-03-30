@props(['post' => $post])

<article class="ui-card-muted space-y-4">
    <div class="flex items-center justify-between">
        <div>
            <a href="{{ route('users.posts', $post->user) }}" class="font-semibold text-slate-800">
                {{ $post->user->name }}
            </a>
            <p class="text-xs" style="color: var(--muted);">
                {{ $post->user->username }} · {{ $post->created_at->diffForHumans() }}
            </p>
        </div>

        @can('delete', $post)
            <form action="{{ route('posts.destroy', $post) }}" method="post" class="inline">
                @csrf
                @method('DELETE')
                <x-ui.button variant="danger" type="submit">Delete</x-ui.button>
            </form>
        @endcan
    </div>

    <p class="leading-relaxed">{{ $post->body }}</p>

    <div class="flex flex-wrap items-center gap-4 border-t border-slate-200 pt-3">
        @auth
            <div class="flex items-center gap-2">
                @if (!$post->likedBy(auth()->user()))
                    <form action="{{ route('posts.likes', $post) }}" method="post" class="inline">
                        @csrf
                        <x-ui.button variant="ghost" type="submit">❤️ Like</x-ui.button>
                    </form>
                @else
                    <form action="{{ route('posts.likes', $post) }}" method="post" class="inline">
                        @csrf
                        @method('DELETE')
                        <x-ui.button variant="ghost" type="submit">❤️ Unlike</x-ui.button>
                    </form>
                @endif

                <span class="text-xs font-medium" style="color: var(--muted);">
                    {{ $post->likes->count() }}
                    {{ Str::plural('like', $post->likes->count()) }}
                </span>
            </div>
        @endauth

        @guest
            <span class="text-xs font-medium" style="color: var(--muted);">
                ❤️ {{ $post->likes->count() }} {{ Str::plural('like', $post->likes->count()) }}
            </span>
        @endguest

        <a href="{{ route('posts.show', $post) }}" class="text-xs font-medium" style="color: var(--brand);">
            Read more
        </a>
    </div>
</article>