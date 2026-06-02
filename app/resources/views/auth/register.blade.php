<x-guest-layout>

    <div class="mx-auto max-w-md rounded-xl border bg-white p-8 shadow-sm">
        <h1 class="mb-6 text-2xl font-bold text-gray-900">
            Inscription
        </h1>

        <form method="POST" action="{{ route('register') }}" class="space-y-5">
            @csrf

            <div>
                <label for="name" class="mb-1 block text-sm font-medium text-gray-700">
                    Nom
                </label>

                <input
                    id="name"
                    name="name"
                    type="text"
                    required
                    autofocus
                    value="{{ old('name') }}"
                    class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:border-indigo-500 focus:outline-none"
                >

                @error('name')
                    <p class="mt-1 text-sm text-red-600">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div>
                <label for="email" class="mb-1 block text-sm font-medium text-gray-700">
                    Email
                </label>

                <input
                    id="email"
                    name="email"
                    type="email"
                    required
                    value="{{ old('email') }}"
                    class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:border-indigo-500 focus:outline-none"
                >

                @error('email')
                    <p class="mt-1 text-sm text-red-600">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div>
                <label for="password" class="mb-1 block text-sm font-medium text-gray-700">
                    Mot de passe
                </label>

                <input
                    id="password"
                    name="password"
                    type="password"
                    required
                    class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:border-indigo-500 focus:outline-none"
                >

                @error('password')
                    <p class="mt-1 text-sm text-red-600">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div>
                <label for="password_confirmation" class="mb-1 block text-sm font-medium text-gray-700">
                    Confirmation du mot de passe
                </label>

                <input
                    id="password_confirmation"
                    name="password_confirmation"
                    type="password"
                    required
                    class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:border-indigo-500 focus:outline-none"
                >
            </div>

            <button
                type="submit"
                class="w-full rounded-lg bg-indigo-600 px-4 py-2 font-medium text-white hover:bg-indigo-700"
            >
                Créer un compte
            </button>
        </form>

        <p class="mt-6 text-center text-sm text-gray-600">
            Déjà inscrit ?
            <a href="{{ route('login') }}"
               class="font-medium text-indigo-600 hover:text-indigo-700">
                Connexion
            </a>
        </p>
    </div>

</x-guest-layout>
