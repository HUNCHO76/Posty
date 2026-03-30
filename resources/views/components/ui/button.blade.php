@props([
    'variant' => 'primary',
    'type' => 'button',
])

@php
    $variants = [
        'primary' => 'ui-btn-primary',
        'ghost' => 'ui-btn-ghost',
        'danger' => 'ui-btn-danger',
    ];
@endphp

<button type="{{ $type }}" {{ $attributes->merge(['class' => 'ui-btn ' . ($variants[$variant] ?? $variants['primary'])]) }}>
    {{ $slot }}
</button>
