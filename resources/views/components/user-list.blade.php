@foreach ($users as $user)
    <li class="flex items-center justify-between border-b py-2">
        <span>{{ $user->name }}</span>

        <div class="flex items-center space-x-2">
            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-sm">
                @if (Auth::user()->role_id === 1)
                    <button class="bg-green-500 text-white px-3 py-1 rounded-md">
                        Editar
                    </button>
                @endif
            </a>
            <form action="{{ route('users.destroy', $user->id) }}" method="post" class="inline">
                @csrf
                @method('DELETE')
                @if (Auth::user()->role_id === 1)
                    <button class="bg-red-500 text-white px-3 py-1 rounded-md">
                        Deletar
                    </button>
                @endif
            </form>
        </div>
    </li>
@endforeach
