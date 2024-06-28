<!-- resources/views/employees/create.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Añadir Empleado') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                    <form action="{{ route('staff.store') }}" method="POST">
                        @csrf

                        <!-- Rol -->
                        <div class="mt-4">
                            <x-input-label for="rol_id" :value="__('Rol')" />
                            <x-select-input id="rol_id" class="block mt-1 w-full" name="rol_id" required>
                                <option value="" selected disabled>{{ __('Seleccionar Rol') }}</option>
                                @foreach($roles as $rol)
                                    <option value="{{ $rol->id }}">{{ $rol->role_name }}</option>
                                @endforeach
                            </x-select>
                        </div>

                        <!-- Identificación -->
                        <div class="mt-4">
                            <x-input-label for="identification" :value="__('Identificación')" />
                            <x-text-input id="identification" class="block mt-1 w-full" type="text" name="identification" :value="old('identification')" required autofocus />
                        </div>

                        <!-- Nombre -->
                        <div class="mt-4">
                            <x-input-label for="first_name" :value="__('Nombre')" />
                            <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required />
                        </div>

                        <!-- Apellido -->
                        <div class="mt-4">
                            <x-input-label for="last_name" :value="__('Apellido')" />
                            <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required />
                        </div>

                        <!-- Correo Electrónico -->
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Correo Electrónico')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                        </div>

                        <!-- Contraseña -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Contraseña')" />
                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                        </div>

                        <!-- Confirmar Contraseña -->
                        <div class="mt-4">
                            <x-input-label for="password_confirmation" :value="__('Confirmar Contraseña')" />
                            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button>
                                {{ __('Registrar Empleado') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
