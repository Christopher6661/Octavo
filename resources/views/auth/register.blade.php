@extends('layout.app')
@section('titulo')
    Registrate en la Red Social del ITSAL
@endsection
@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center p-10">
        <div class="md:w-6/12 p-5">
            <img src="{{ asset('imagenes/registrar.jpg') }}" alt="Imágen del registro de usuarios">
        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre
                    </label>
                    <input
                    class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
                    type="text"
                    id="name"
                    name="name"
                    placeholder="Tu nombre!!"
                    value = "{{ old('name') }}"
                    >
                    @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre de usuario
                    </label>
                    <input
                    class="border p-3 w-full rounded-lg @error('username') border-red-500 @enderror"
                    type="text"
                    id="username"
                    name="username"
                    placeholder="Tu nombre de usuario!!"
                    value = "{{ old('username') }}"
                    >
                    @error('username')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                        Correo
                    </label>
                    <input
                    class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror"
                    type="email"
                    id="email"
                    name="email"
                    placeholder="Tu correo electrónico!!"
                    value = "{{ old('email') }}"
                    >
                    @error('email')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                        Contraseña
                    </label>
                    <input
                    class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror"
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Tu contraseña"
                    >
                    @error('password')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">
                        Repite tu contraseña
                    </label>
                    <input
                    class="border p-3 w-full rounded-lg"
                    type="password"
                    id="password_confirmation"
                    name="password_confirmation"
                    placeholder="Vuelve a escribir la contraseña">
                </div>
                <input
                type="submit"
                value="Crear Cuenta"
                class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"
                >
            </form>
        </div>
    </div>
@endsection
