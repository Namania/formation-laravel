<div {{ $attributes->merge([
    'class' => 'bg-white border border-gray-200 rounded-lg shadow-sm p-6'
]) }}>
    
    @if(!empty($title))
        <div class="mb-4 border-b border-gray-200 pb-3">
            <h3 class="text-lg font-semibold text-gray-900">
                {{ $title }}
            </h3>
        </div>
    @endif

    <div>
        {{ $slot }}
    </div>
</div>
