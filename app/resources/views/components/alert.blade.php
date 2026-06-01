<div {{ $attributes->merge([
    'class' => "rounded-lg p-4 flex items-start justify-between {$classes}"
]) }}>
    {{ $slot }}

    @if($dismissible)
        <button
            x-data
            @click="$el.parentElement.remove()"
            class="ml-4 font-bold"
        >
            ×
        </button>
    @endif
</div>
