<x-app-layout title="Test composants">

    <x-card title="Mes composants">

        <div class="space-y-4">

            <x-alert type="warning" dismissible>
                WARNING
            </x-alert>

            <x-alert type="success">
                SUCCESS
            </x-alert>

            <div class="space-x-2">
                <x-badge color="green">Actif</x-badge>
                <x-badge color="red">Erreur</x-badge>
                <x-badge color="blue">Nouveau</x-badge>
            </div>

            <x-button>
                Mon bouton
            </x-button>

            <x-modal>
                <x-slot:trigger>
                    <x-button>
                        Ouvrir le modal
                    </x-button>
                </x-slot:trigger>

                <h2 class="text-xl font-semibold mb-4">
                    Mon modal
                </h2>

                <p>
                    Contenu du modal.
                </p>
            </x-modal>

        </div>

    </x-card>

</x-app-layout>