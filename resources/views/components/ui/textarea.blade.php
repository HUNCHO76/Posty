@props([
    'label' => null,
    'name' => null,
    'rows' => 4,
])

<div class="space-y-2">
    @if ($label)
        <label for="{{ $name }}" class="ui-label">{{ $label }}</label>
    @endif

    <textarea
        {{ $attributes->merge([
            'id' => $name,
            'name' => $name,
            'rows' => $rows,
            'class' => 'ui-textarea',
        ]) }}
    >{{ $slot }}</textarea>

    @error($name)
        <p class="ui-error">{{ $message }}</p>
    @enderror
</div>
