<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Lista de Cargos') }}
            </h2>

            <x-primary-button>
                <a href="{{ route('roles.create') }}" class="bg-blue-500 text-black rounded">Adicionar Cargo</a>
            </x-primary-button>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="list-disc">
                        <ul>
                            @foreach ($roles as $role)
                                <li class="flex items-center justify-between border-b py-2">
                                    <span>{{ $role->name }}</span>
                                    <div class="flex items-center space-x-2">
                                        <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-primary btn-sm">
                                            <button class="bg-green-500 text-white px-3 py-1 rounded-md">
                                                Editar
                                            </button>
                                        </a>
                                        <form action="{{ route('roles.destroy', $role->id) }}" method="post"
                                            class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="bg-red-500 text-white px-3 py-1 rounded-md">
                                                Deletar
                                            </button>
                                        </form>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
