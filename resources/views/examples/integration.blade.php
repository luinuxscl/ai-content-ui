{{-- Ejemplo de cómo integrar los componentes en una aplicación Laravel --}}

@extends('layouts.app')  {{-- Suponiendo que tu app tiene un layout básico --}}

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-bold mb-6">Ejemplo de Integración</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <x-ui-card>
            <x-slot name="header">
                <h2 class="font-semibold">Formulario de Ejemplo</h2>
            </x-slot>
            
            <form action="{{ route('user.store') }}" method="POST">
                @csrf
                
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium mb-1">Nombre</label>
                    <input type="text" name="name" id="name" 
                           class="w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50"
                           value="{{ old('name') }}">
                    @error('name')
                        <p class="text-error text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium mb-1">Email</label>
                    <input type="email" name="email" id="email" 
                           class="w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50"
                           value="{{ old('email') }}">
                    @error('email')
                        <p class="text-error text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="mb-4">
                    <label for="role" class="block text-sm font-medium mb-1">Rol</label>
                    <select name="role" id="role" 
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                        <option value="">Seleccionar rol</option>
                        <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Administrador</option>
                        <option value="editor" {{ old('role') == 'editor' ? 'selected' : '' }}>Editor</option>
                        <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>Usuario</option>
                    </select>
                    @error('role')
                        <p class="text-error text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="flex justify-end gap-2">
                    <x-ui-button variant="btn-ghost">Cancelar</x-ui-button>
                    <x-ui-button variant="btn-primary" type="submit">Guardar</x-ui-button>
                </div>
            </form>
            
            <x-slot name="footer">
                <p class="text-sm text-gray-500">
                    Los usuarios se crearán con una contraseña aleatoria que se enviará por email.
                </p>
            </x-slot>
        </x-ui-card>
        
        <div class="space-y-6">
            <x-ui-card>
                <x-slot name="header">
                    <h2 class="font-semibold">Notificaciones</h2>
                </x-slot>
                
                <div class="space-y-3">
                    <x-ui-alert variant="alert-success" title="Operación Exitosa">
                        <p>El usuario ha sido creado correctamente.</p>
                    </x-ui-alert>
                    
                    <x-ui-alert variant="alert-warning" title="Advertencia">
                        <p>El usuario no tiene permisos asignados todavía.</p>
                    </x-ui-alert>
                </div>
            </x-ui-card>
            
            <x-ui-card>
                <x-slot name="header">
                    <h2 class="font-semibold">Acciones Rápidas</h2>
                </x-slot>
                
                <div class="flex flex-wrap gap-2">
                    <x-ui-button variant="btn-primary">
                        <i class="fas fa-user-plus mr-2"></i>
                        Nuevo Usuario
                    </x-ui-button>
                    
                    <x-ui-dropdown class="relative">
                        <x-slot name="trigger">
                            <span class="flex items-center">
                                Exportar
                                <i class="fas fa-chevron-down ml-2"></i>
                            </span>
                        </x-slot>
                        
                        <a href="#" class="block px-4 py-2 text-sm hover:bg-base-200">Excel</a>
                        <a href="#" class="block px-4 py-2 text-sm hover:bg-base-200">CSV</a>
                        <a href="#" class="block px-4 py-2 text-sm hover:bg-base-200">PDF</a>
                    </x-ui-dropdown>
                </div>
            </x-ui-card>
        </div>
    </div>
</div>
@endsection
