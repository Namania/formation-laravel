<div x-data="{ open: false }" @keydown.escape.window="open = false">
    {{-- Trigger --}}
    <div @click="open = true" class="inline-block">
        {{ $trigger }}
    </div>

    {{-- Overlay --}}
    <div x-show="open" x-transition.opacity class="fixed inset-0 z-50 flex items-center justify-center bg-black/50"
        @click.self="open = false" style="display: none;">
        {{-- Modal --}}
        <div x-show="open" x-transition {{ $attributes->merge([
    'class' => 'bg-white rounded-lg shadow-xl p-6 w-full max-w-' . $maxWidth . ' relative'
]) }}>
            {{-- Close button --}}
            <button @click="open = false" class="absolute top-3 right-3 text-gray-500 hover:text-gray-800 text-xl">
                x
            </button>

            {{ $slot }}
        </div>
    </div>
</div>
