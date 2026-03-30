@props([
    'label' => null,
    'name' => null,
    'type' => 'text',
])

<div class="space-y-2">
    @if ($label)
        <label for="{{ $name }}" class="ui-label">{{ $label }}</label>
    @endif

    <input
        {{ $attributes->merge([
            'id' => $name,
            'name' => $name,
            'type' => $type,
            'class' => 'ui-input',
        ]) }}
    >

    @error($name)
        <p class="ui-error">{{ $message }}</p>
    @enderror
</div>
