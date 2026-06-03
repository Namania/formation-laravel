<select {{ $attributes->merge([
    'class' => "px-3 py-2 {$class}"
]) }}>{{ $slot }}</select>
