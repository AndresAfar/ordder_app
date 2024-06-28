<!-- resources/views/users/index.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 flex justify-end">
                <a href="{{ route('staff.create') }}">
                    <x-add-button class="ml-4">
                        {{ __('Añadir Empleado') }}
                    </x-add-button>
                </a>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <x-table>
                    <x-slot name="header">
                        <x-table-cell>{{ __('ID') }}</x-table-cell>
                        <x-table-cell>{{ __('Rol') }}</x-table-cell>
                        <x-table-cell>{{ __('Identificación') }}</x-table-cell>
                        <x-table-cell>{{ __('Nombre') }}</x-table-cell>
                        <x-table-cell>{{ __('Apellido') }}</x-table-cell>
                        <x-table-cell>{{ __('Correo Electrónico') }}</x-table-cell>
                        <x-table-cell>{{ __('Fecha de Registro') }}</x-table-cell>
                        <x-table-cell>{{ __('Última Actualización') }}</x-table-cell>
                        <x-table-cell>{{ __('Acciones') }}</x-table-cell>
                    </x-slot>

                    @foreach($users as $user)
                        <x-table-row>
                            <x-table-cell>{{ $user->id }}</x-table-cell>
                            <x-table-cell>{{ $user->roles->role_name }}</x-table-cell>
                            <x-table-cell>{{ $user->identification }}</x-table-cell>
                            <x-table-cell>{{ $user->first_name }}</x-table-cell>
                            <x-table-cell>{{ $user->last_name }}</x-table-cell>
                            <x-table-cell>{{ $user->email }}</x-table-cell>
                            <x-table-cell>{{ $user->created_at }}</x-table-cell>
                            <x-table-cell>{{ $user->updated_at }}</x-table-cell>
                            <x-table-cell>
                                <a href="{{ route('staff.edit', $user) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                <form action="{{ route('staff.destroy', $user) }}" method="POST" onsubmit="return confirm('Are you sure?');" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                                </form>
                            </x-table-cell>
                        </x-table-row>
                    @endforeach
                </x-table>
            </div>
        </div>
    </div>
</x-app-layout>
