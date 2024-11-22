@extends('layouts.app')

@section('body')
    <h3 class="text-gray-700 text-3xl font-medium">Clima</h3>

    <div class="mt-4">
        <div class="flex flex-wrap -mx-6">
            <div class="w-full mt-6 px-6 sm:w-1/2 xl:w-1/3 sm:mt-0">
                <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white">
                    <div class="p-3 rounded-full bg-blue-600 bg-opacity-75">
                        <svg class="h-8 w-8 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                            <path d="M9 19C9 20.1046 9.89543 21 11 21C12.1046 21 13 20.1046 13 19C13 17.8954 12.1046 17 11 17C9.89543 17 9 17.8954 9 19Z" fill="currentColor"/>
                        </svg>
                    </div>

                    <div class="mx-5">
                        @if (isset($weatherData))
                            <h4 class="text-2xl font-semibold text-gray-700">
                                {{ $weatherData['main']['temp'] }} °C
                            </h4>
                            <div class="text-gray-500">Clima en {{ $weatherData['name'] }}</div>
                            <div class="text-gray-500">{{ $weatherData['weather'][0]['description'] }}</div>
                        @else
                            <p class="text-red-500">No se pudo obtener el clima</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-6">
        <!-- Formulario para ingresar la ciudad -->
        <form action="{{ url('/weather') }}" method="get" class="flex justify-center items-center">
            <input type="text" name="city" placeholder="Ingresa una ciudad" value="{{ request()->input('city') }}" class="px-4 py-2 border rounded-md">
            <button type="submit" class="ml-2 px-4 py-2 bg-blue-600 text-white rounded-md">Consultar</button>
        </form>
    </div>
@endsection