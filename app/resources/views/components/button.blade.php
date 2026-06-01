<button {{ $attributes->merge([
    'class' => "border rounded-lg px-4 py-3 {$classes}"
]) }}>
    {{ $slot }}
</button>
