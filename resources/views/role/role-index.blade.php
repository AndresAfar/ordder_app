<!-- resources/views/roles/index.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Roles') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 flex justify-end gap-4">
                <a href="{{ route('rol.create') }}">
                    <x-add-button class="ml-4">
                        {{ __('Añadir Nuevo Rol') }}
                    </x-add-button>
                </a>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <x-table>
                    <x-slot name="header">
                        <x-table-cell>{{ __('ID') }}</x-table-cell>
                        <x-table-cell>{{ __('Nombre del Rol') }}</x-table-cell>
                        <x-table-cell>{{ __('Descripción') }}</x-table-cell>
                        <x-table-cell>{{ __('Acciones') }}</x-table-cell>
                    </x-slot>

                    @foreach($roles as $rol)
                        <x-table-row>
                            <x-table-cell>{{ $rol->id }}</x-table-cell>
                            <x-table-cell>{{ $rol->role_name }}</x-table-cell>
                            <x-table-cell>{{ $rol->description }}</x-table-cell>
                            <x-table-cell>
                                <a href="{{ route('rol.edit', $rol) }}" class="text-indigo-600 hover:text-indigo-900">Editar</a>
                                <form action="{{ route('rol.destroy', $rol) }}" method="POST" onsubmit="return confirm('¿Estás seguro?');" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900">Eliminar</button>
                                </form>
                            </x-table-cell>
                        </x-table-row>
                    @endforeach
                </x-table>
            </div>
        </div>
    </div>
</x-app-layout>
