@props([
    'type' => 'info',
])

@php
    $types = [
        'info' => 'ui-alert-info',
        'danger' => 'ui-alert-danger',
    ];
@endphp

<div {{ $attributes->merge(['class' => 'ui-alert ' . ($types[$type] ?? $types['info'])]) }}>
    {{ $slot }}
</div>
