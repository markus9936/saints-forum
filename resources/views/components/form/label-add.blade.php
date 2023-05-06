@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-xs text-red-500 font-semibold uppercase mb-2']) }}>
    {{ $value ?? $slot }}
</label>
