<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? config('app.name') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="flex min-h-screen flex-col bg-gray-50 text-gray-900">
    @props(['header' => null])
    <nav class="border-b bg-white px-6 py-4 flex items-center justify-between">
            <a href="/" class="font-bold text-indigo-600">
                {{ config('app.name') }}
            </a> <div class="flex items-center gap-4">

            <div class="flex items-center gap-4">
                @if(auth()->user()?->isAdmin())
                    <a href="{{ route('newsletters.index') }}">Newsletters</a>
                @endif
                @auth
                    <a href="{{ route('dashboard') }}"
                       class="text-sm text-gray-600 hover:text-gray-900">
                        Dashboard
                    </a>

                    <a href="{{ route('posts.index') }}"
                       class="text-sm text-gray-600 hover:text-gray-900">
                        Posts
                    </a>

                    <span class="text-sm text-gray-500">
                        {{ auth()->user()->name }}
                    </span>

                    {{-- Logout --}}
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button
                            type="submit"
                            class="text-sm text-red-600 hover:text-red-800">
                            Déconnexion
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}"
                       class="text-sm text-gray-600 hover:text-gray-900">
                        Connexion
                    </a>

                    <a href="{{ route('register') }}"
                       class="rounded-md bg-indigo-600 px-3 py-2 text-sm text-white hover:bg-indigo-700">
                        Inscription
                    </a>
                @endauth
            </div>
        </div>
    </nav>
    <main class="flex-1 py-8 px-4 max-w-5xl mx-auto w-full">
        @isset($header)<h1 class="text-xl font-semibold mb-4">{{ $header }}</h1>@endisset
        {{ $slot }}
    </main>
</body>

</html>
