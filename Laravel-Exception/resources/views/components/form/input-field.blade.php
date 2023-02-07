@props([
    'type' => 'text', 'name', 'placeholder'
])
<input
    required
    type='{{ $type }}'
    name="{{ $name }}"
    placeholder="{{ $placeholder }}"
    {{ $attributes->merge(['class' => 'form-control']) }}>
