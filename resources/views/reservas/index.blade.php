<x-app-layout>
    <div class="relative overflow-x-auto w-3/4 mx-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6">
                        Usuario
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Vuelo
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Plaza
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reservas as $reserva)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $reserva->user->name }}
                        </th>
                        <th
                         scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $reserva->vuelo->codigo }}
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $reserva->asiento }}
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <form action="{{ route('reservas.create') }}" class="flex justify-center mt-4 mb-4">
            <x-primary-button class="bg-green-500">Insertar una nueva reserva</x-primary-button>
        </form>
    </div>
</x-app-layout>
