@props(['title' => null, 'subtitle' => null])

<section {{ $attributes->merge(['class' => 'ui-card fade-slide']) }}>
    @if ($title)
        <h2 class="display-serif text-2xl font-bold leading-tight">{{ $title }}</h2>
    @endif

    @if ($subtitle)
        <p class="mt-1 text-sm" style="color: var(--muted);">{{ $subtitle }}</p>
    @endif

    @if ($title || $subtitle)
        <div class="ui-divider"></div>
    @endif

    {{ $slot }}
</section>
