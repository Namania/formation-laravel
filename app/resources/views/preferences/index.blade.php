<x-app-layout>
    <div class="max-w-xl mx-auto mt-10 shadow-md rounded-xl p-6">

        <h1 class="text-2xl font-bold text-gray-800 mb-6">
            Préférences
        </h1>

        @if(session('success'))
            <x-alert>
                {{ session('success') }}
            </x-alert>
        @endif

        <form method="POST" action="{{ route('preferences.store') }}" class="space-y-5">
            @csrf

            <div>
                <label for="theme" class="block text-sm font-medium text-gray-700 mb-2">
                    Thème
                </label>

                <x-select
                    name="theme"
                    id="theme"
                    class="w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500"
                >
                    <option value="light" {{ $theme === 'light' ? 'selected' : '' }}>
                        Clair
                    </option>
                    <option value="dark" {{ $theme === 'dark' ? 'selected' : '' }}>
                        Sombre
                    </option>
                </x-select>

                @error('theme')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="locale" class="block text-sm font-medium text-gray-700 mb-2">
                    Langue
                </label>

                <x-select
                    name="locale"
                    id="locale"
                    class="w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500"
                >
                    <option value="fr" {{ $locale === 'fr' ? 'selected' : '' }}>
                        Français
                    </option>
                    <option value="en" {{ $locale === 'en' ? 'selected' : '' }}>
                        English
                    </option>
                </x-select>

                @error('locale')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button
                type="submit"
                class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-lg transition"
            >
                Enregistrer
            </button>
        </form>

        <div class="mt-6 text-sm text-gray-600 border-t pt-4">
            <p><strong>Thème actuel :</strong> {{ session('theme') }}</p>
            <p><strong>Langue actuelle :</strong> {{ session('locale') }}</p>
        </div>

    </div>
</x-app-layout>