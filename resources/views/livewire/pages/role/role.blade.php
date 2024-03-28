<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Role') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <button type="button" data-ripple-light="true"
                        class="align-middle select-none font-sans
                                font-bold text-center
                                uppercase transition-all
                                disabled:opacity-50 disabled:shadow-none
                                disabled:pointer-events-none
                                text-lg py-3 px-6 rounded-lg
                                bg-white-900 text-black
                                shadow-md shadow-gray-900/10
                                hover:shadow-lg hover:shadow-gray-900/20
                                focus:opacity-[0.85] focus:shadow-none
                                active:opacity-[0.85] active:shadow-none" onclick="message()">
                        Button
                    </button>
                </div>
            </div>
            @foreach ($a as $b)
                <p>Roles: {{ $b }}</p>
            @endforeach
        </div>
    </div>

    <script>
        function message() {
            alert('Hola Juan');
        }
    </script>
</x-app-layout>
