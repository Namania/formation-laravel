<x-app-layout>
    <x-slot name="header">
        <h2>Newsletters</h2>
    </x-slot>
    <div class="max-w-3xl mx-auto py-8">
        @if(session('success'))
        <p class="text-green-600 mb-4">{{ session('success') }}</p>@endif
        <a href="{{ route('newsletters.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Nouvelle
            newsletter</a>
        <ul class="mt-6 space-y-2">
            @foreach($newsletters as $n)
                <li>{{ $n->subject }} — {{ $n->sent_at?->format('d/m/Y H:i') ?? 'en cours…' }}</li>
            @endforeach
        </ul>
    </div>
</x-app-layout>
