<x-guest-layout>
    <div class="flex flex-col gap-3 items-center">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <div class="bg-white rounded-2xl shadow p-6">
                <p class="text-sm text-gray-500">Utilisateurs</p>
                <h2 class="text-3xl font-bold text-gray-800 mt-2">
                    {{ $stats['users'] }}
                </h2>
            </div>

            <div class="bg-white rounded-2xl shadow p-6">
                <p class="text-sm text-gray-500">Tâches</p>
                <h2 class="text-3xl font-bold text-gray-800 mt-2">
                    {{ $stats['tasks'] }}
                </h2>
            </div>

        </div>

        <form action="{{ route('cache.flush') }}" method="POST">
            @csrf

            <x-button variant="danger">
                Vider le cache
            </x-button>
        </form>
    </div>
</x-guest-layout>
