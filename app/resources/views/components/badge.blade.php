@props([
    'color' => 'gray',
])

<span {{ $attributes->merge([
    'class' => "inline-flex items-center rounded-full px-2 py-1 text-xs font-medium bg-{$color}-100 text-{$color}-800"
]) }}>
    {{ $slot }}
</span>
