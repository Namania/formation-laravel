<x-app-layout title="Demo composants">

    <div class="max-w-5xl mx-auto py-10 space-y-10">

        {{-- ALERTS --}}
        <x-card title="Alerts">

            <div class="space-y-4">

                <x-alert type="success">
                    Succès : opération effectuée.
                </x-alert>

                <x-alert type="error">
                    Erreur : une action a échoué.
                </x-alert>

                <x-alert type="warning">
                    Attention : vérifiez vos informations.
                </x-alert>

                <x-alert
                    type="warning"
                    dismissible
                >
                    Alert dismissible (fermeture possible)
                </x-alert>

            </div>

        </x-card>

        {{-- BADGES --}}
        <x-card title="Badges">

            <div class="flex flex-wrap gap-3">

                <x-badge color="green">
                    Actif
                </x-badge>

                <x-badge color="red">
                    Erreur
                </x-badge>

                <x-badge color="blue">
                    Nouveau
                </x-badge>

                <x-badge color="yellow">
                    En attente
                </x-badge>

            </div>

        </x-card>

        {{-- BUTTONS --}}
        <x-card title="Buttons">

            <div class="flex flex-wrap gap-3">

                <x-button>
                    Default
                </x-button>

                <x-button variant="primary">
                    Primary
                </x-button>

                <x-button variant="danger">
                    Danger
                </x-button>

                <x-button class="w-full">
                    Bouton pleine largeur
                </x-button>

            </div>

        </x-card>

        {{-- CARDS --}}
        <x-card title="Cards">

            <div class="grid md:grid-cols-2 gap-4">

                <x-card title="Card avec titre">
                    <p>
                        Ceci est une card avec un titre.
                    </p>
                </x-card>

                <x-card>
                    <p>
                        Ceci est une card sans titre.
                    </p>
                </x-card>

                <x-card class="bg-gray-50">
                    <p>
                        Card avec classes personnalisées via merge().
                    </p>
                </x-card>

            </div>

        </x-card>

        {{-- MODALS --}}
        <x-card title="Modals">

            <div class="flex flex-wrap gap-4">

                {{-- Modal simple --}}
                <x-modal>
                    <x-slot:trigger>
                        <x-button>
                            Modal simple
                        </x-button>
                    </x-slot:trigger>

                    <h2 class="text-xl font-semibold mb-3">
                        Modal simple
                    </h2>

                    <p class="text-gray-600">
                        Contenu du modal simple.
                    </p>
                </x-modal>

                {{-- Modal large --}}
                <x-modal maxWidth="2xl">
                    <x-slot:trigger>
                        <x-button variant="primary">
                            Modal large
                        </x-button>
                    </x-slot:trigger>

                    <h2 class="text-xl font-semibold mb-3">
                        Modal large
                    </h2>

                    <p class="text-gray-600">
                        Ce modal utilise une largeur personnalisée.
                    </p>
                </x-modal>

                {{-- Modal custom --}}
                <x-modal class="border-2 border-blue-500">
                    <x-slot:trigger>
                        <x-button variant="danger">
                            Modal custom
                        </x-button>
                    </x-slot:trigger>

                    <h2 class="text-xl font-semibold mb-3">
                        Modal personnalisé
                    </h2>

                    <p>
                        Exemple avec classes personnalisées.
                    </p>
                </x-modal>

            </div>

        </x-card>

    </div>

</x-app-layout>
