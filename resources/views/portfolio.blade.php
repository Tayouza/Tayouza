<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{Vite::asset('resources/images/favicon.ico')}}" type="image/x-icon">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description"
        content="Olá, eu sou Taylor Canabarro de Souza, bem-vindo ao meu Portifólio. De pseudônimo Tayouza que é um acrônimo para o meu nome e segundo sobrenome.">
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
        <article class="py-4 pb-8 w-full flex justify-center items-center bg-primary-100">
            <div class="w-full flex flex-col justify-center items-center text-center">
                <div class="pt-5 pb-4">
                    <h2 class="text-2xl text-zinc-900">Contato</h2>
                    <span><em class="text-sm text-zinc-600">(Agende uma conversa ou envie-me uma mensagem)</em></span>
                </div>
                <div class="flex flex-col gap-2 justify-evenly w-1/2">
                    <x-contact class="h-full text-justify"/>
                    <form action="" method="POST" class="flex flex-col gap-2 h-full w-full">
                        <x-input placeholder="Nome"
                            class="bg-white !bg-opacity-90 focus:!bg-opacity-100 text-zinc-700 dark:bg-zinc-100 dark:border-zinc-200 dark:text-zinc-700" />
                        <x-input placeholder="Email"
                            class="bg-white !bg-opacity-90 focus:!bg-opacity-100 text-zinc-700 dark:bg-zinc-100 dark:border-zinc-200 dark:text-zinc-700" />
                        <x-textarea placeholder="Mensagem"
                            class="bg-white !bg-opacity-90 focus:!bg-opacity-100 text-zinc-700 dark:bg-zinc-100 dark:border-zinc-200 dark:text-zinc-700 h-full" />
                        <input type="submit" value="Enviar"
                            class="!bg-opacity-90 cursor-pointer rounded text-white py-2 bg-zinc-800 hover:!bg-opacity-100">
                    </form>
                </div>
            </div>
        </article>
        <article class="w-full flex justify-center items-center pb-4">
            <span class="text-sm font-light text-zinc-800 dark:text-white">&copy;Tayouza, 2023</span>
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