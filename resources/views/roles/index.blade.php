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

    <div class="list-disc">
        <ul>
            @foreach ($roles as $role)
                <li class="flex items-center justify-between border-b py-2">

                    <span>{{ $role->name }}</span>

                    <div class="flex items-center space-x-2">
                        <form action="{{ route('roles.edit', $role->id) }}" method="post" class="inline">
                            @csrf
                            @method('PUT')
                            <button class="bg-green-500 text-white px-3 py-1 rounded-md">
                                Editar
                            </button>
                        </form>

                        <form action="{{ route('roles.destroy', $role->id) }}" method="post" class="inline">
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
        {{-- <ul class="list-disc">
            @foreach ($roles as $role)
                <li class="py-3 flex items-center justify-between">
                    <span class="text-lg">{{ $role->name }}</span>

                    <div class="flex items-center space-x-2">
                        <a href="{{ route('roles.edit', $role->id) }}" class="text-blue-500">
                            Editar
                        </a>                        
                    </div>
                </li>
            @endforeach
        </ul> --}}

    </div>
</x-app-layout>
