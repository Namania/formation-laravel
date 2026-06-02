<x-app-layout>

    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800">
            Tableau de bord
        </h2>
    </x-slot>

    <div class="rounded-xl border bg-white p-6 shadow-sm">
        <h1 class="text-2xl font-bold text-gray-900">
            Bienvenue, {{ auth()->user()->name }}
            @role('admin')
                <x-badge color="red">admin</x-badge>
            @else
                <x-badge>user</x-badge>
            @endrole
        </h1>

        <p class="mt-3 text-gray-600">
            Accédez à la gestion de vos contenus.
        </p>

        <a
            href="{{ route('posts.index') }}"
            class="mt-6 inline-flex rounded-lg bg-indigo-600 px-4 py-2 text-white hover:bg-indigo-700"
        >
            Gérer les articles
        </a>
    </div>

</x-app-layout>
