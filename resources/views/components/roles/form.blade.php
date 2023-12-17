<form action="{{ $action }}" method="post">
    @csrf

    @isset($name)
        @method('PUT')
    @endisset

    <div class="mb-4">
        <label for="name" class="block text-sm font-medium text-gray-600">Nome:</label>
        <input type="text"
               id="name"
               name="name"
               class="mt-1 p-2 border rounded-md w-full"
               @isset($name)value="{{ $name }}"@endisset>
    </div>

    <x-primary-button>
        <a type="submit" class="bg-blue-500 text-black rounded">Adicionar</a>
    </x-primary-button>
</form>