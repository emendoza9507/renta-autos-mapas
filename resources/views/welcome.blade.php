<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
        <style>
            .hero-pattern {
                background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%239C92AC' fill-opacity='0.1'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative min-h-screen bg-white dark:bg-zinc-900">
            <!-- Hero Section -->
            <div class="hero-pattern relative overflow-hidden">
                <div class="relative pt-6 pb-16 sm:pb-24">
                    <main class="mt-16 mx-auto max-w-7xl px-4 sm:mt-24">
                        <div class="text-center">
                            <h1 class="text-4xl tracking-tight font-extrabold text-zinc-900 dark:text-white sm:text-5xl md:text-6xl">
                                <span class="block">Sistema de Mapas</span>
                                <span class="block text-red-600 dark:text-red-400">Renta de Autos</span>
                            </h1>
                            <p class="mt-3 max-w-md mx-auto text-base text-zinc-500 dark:text-zinc-400 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                                Encuentra los mejores puntos de renta de autos, talleres y oficinas en toda Cuba.
                                Navega por el mapa y descubre las opciones disponibles cerca de ti.
                            </p>
                            <div class="mt-5 max-w-md mx-auto sm:flex sm:justify-center md:mt-8">
                                @if (Route::has('login'))
                                    <div class="rounded-md shadow">
                                        @auth
                                            <a href="{{ route('dashboard') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-red-600 hover:bg-red-700 md:py-4 md:text-lg md:px-10">
                                                {{ __('Dashboard') }}
                                            </a>
                                        @else
                                            <a href="{{ route('login') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-red-600 hover:bg-red-700 md:py-4 md:text-lg md:px-10">
                                                {{ __('Iniciar Sesión') }}
                                            </a>
                                        @endauth
                                    </div>
                                    @if (!Auth::check() && Route::has('register'))
                                        <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
                                            <a href="{{ route('register') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-red-600 bg-white hover:bg-zinc-50 dark:bg-zinc-800 dark:text-red-400 dark:hover:bg-zinc-700 md:py-4 md:text-lg md:px-10">
                                                {{ __('Registrarse') }}
                                            </a>
                                        </div>
                                    @endif
                                @endif
                            </div>
                        </div>
                    </main>
                </div>
            </div>

            <!-- Feature Section -->
            <div class="py-12 bg-white dark:bg-zinc-900">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="lg:text-center">
                        <h2 class="text-base text-red-600 dark:text-red-400 font-semibold tracking-wide uppercase">Características</h2>
                        <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-zinc-900 dark:text-white sm:text-4xl">
                            Todo lo que necesitas en un solo lugar
                        </p>
                    </div>

                    <div class="mt-10">
                        <div class="space-y-10 md:space-y-0 md:grid md:grid-cols-3 md:gap-x-8 md:gap-y-10">
                            <div class="relative">
                                <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-red-500 text-white">
                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                </div>
                                <div class="ml-16">
                                    <h3 class="text-lg leading-6 font-medium text-zinc-900 dark:text-white">Puntos de Renta</h3>
                                    <p class="mt-2 text-base text-zinc-500 dark:text-zinc-400">
                                        Encuentra los puntos de renta más cercanos y disponibles en tiempo real.
                                    </p>
                                </div>
                            </div>

                            <div class="relative">
                                <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-red-500 text-white">
                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                                    </svg>
                                </div>
                                <div class="ml-16">
                                    <h3 class="text-lg leading-6 font-medium text-zinc-900 dark:text-white">Talleres</h3>
                                    <p class="mt-2 text-base text-zinc-500 dark:text-zinc-400">
                                        Localiza talleres mecánicos cercanos y verifica su disponibilidad.
                                    </p>
                                </div>
                            </div>

                            <div class="relative">
                                <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-red-500 text-white">
                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                    </svg>
                                </div>
                                <div class="ml-16">
                                    <h3 class="text-lg leading-6 font-medium text-zinc-900 dark:text-white">Oficinas</h3>
                                    <p class="mt-2 text-base text-zinc-500 dark:text-zinc-400">
                                        Accede a información de oficinas y puntos de atención al cliente.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
