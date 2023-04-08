<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{Vite::asset('resources/images/favicon.ico')}}" type="image/x-icon">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description"
        content="Olá &#128075;, eu sou Taylor Canabarro de Souza, bem-vindo ao meu Portifólio. De pseudônimo Tayouza que é um acrônimo para o meu nome e segundo sobrenome.">
    <meta name="google-site-verification" content="Dns22gr7PBGvZ1d4cEN7c0CzvNZ033dJr59o6l_9xcE">
    <meta name="theme-color" content="#fff">
    <!-- PWA  -->
    <meta name="theme-color" content="#efd166" />
    <link rel="apple-touch-icon" href="/logo512.PNG">
    <link rel="manifest" href="/manifest.json">
    <!-- Scripts -->
    @wireUiScripts
    @darkTheme
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body
    class="antialiased relative sm:flex sm:flex-col sm:items-center min-h-screen bg-center bg-zinc-100 bg-dots-darker dark:bg-dots-lighter dark:bg-zinc-900 selection:bg-red-500 selection:text-white">
    @if (Route::has('login'))
    <x-button-change-theme />
    <div class="fixed -top-1 right-8 p-6 text-right">
        @auth
        <a href="{{ url('/dashboard') }}"
            class="font-semibold text-zinc-600 hover:text-zinc-900 dark:text-zinc-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 opacity-[0.01]">Dashboard</a>
        @else
        <a href="{{ route('login') }}"
            class="font-semibold text-zinc-600 hover:text-zinc-900 dark:text-zinc-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 opacity-[0.01]">Log
            in</a>
        @endauth
    </div>
    @endif

    <x-logo class="fixed top-4 left-4 text-zinc-900 dark:text-white" />

    <header class="container flex flex-col items-center gap-4 mt-28">
        <x-img-profile />
        <x-bio-profile />
        <x-social-medias />

    </header>
    <main class="w-full flex flex-col items-center gap-4 mt-28">
        <article class="w-full bg-primary-100 flex flex-col xl:flex-row gap-12 justify-center items-center py-12 px-6">
            <x-my-hard-skills />
            <x-my-soft-skills />
        </article>
        <article class="w-full">
            <x-projects />
        </article>
    </main>
    @livewireScripts
    @livewire('livewire-ui-modal')
    <script src="{{ asset('/sw.js') }}"></script>
    <script>
        if (!navigator.serviceWorker.controller) {
            navigator.serviceWorker.register("/sw.js").then(function (reg) {
            console.log("Service worker has been registered for scope: " + reg.scope);
        });
    }
    </script>
</body>

</html>