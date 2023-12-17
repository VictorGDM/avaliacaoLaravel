<form action="{{ $action }}" method="post">
    @csrf

    @isset($name)
        @method('PUT')
    @endisset
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-white">Cargo:</label>
                        <input type="text" id="name" name="name" class="mt-1 p-2 border rounded-md w-full text-black"
                            @isset($name)value="{{ $name }}"@endisset>
                    </div>

                    <x-primary-button class="flex justify-end">
                        <a type="submit" class="bg-blue-500 text-black rounded">
                            @if (@isset($name))
                                Editar
                            @else
                                Adicionar
                            @endif
                        </a>
                    </x-primary-button>
                </div>
            </div>
        </div>
    </div>
</form>
