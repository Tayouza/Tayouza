<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{Vite::asset('resources/images/favicon.ico')}}" type="image/x-icon">
    <title>{{ config('app.name', 'Laravel') }} — Software Engineer</title>
    <meta name="description"
        content="Portfólio de Taylor Canabarro de Souza, Software Engineer Full Stack. Especialista em PHP (Laravel), arquitetura de sistemas e soluções escaláveis.">
    <meta name="google-site-verification" content="Dns22gr7PBGvZ1d4cEN7c0CzvNZ033dJr59o6l_9xcE">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Taylor Canabarro de Souza — Software Engineer">
    <meta property="og:description" content="Portfólio de Taylor Canabarro de Souza, Software Engineer Full Stack.">
    <meta property="og:image" content="{{ Vite::asset('resources/images/profile.webp') }}">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:locale" content="pt_BR">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Taylor Canabarro de Souza — Software Engineer">
    <meta name="twitter:description" content="Portfólio de Software Engineer Full Stack.">
    <meta name="twitter:image" content="{{ Vite::asset('resources/images/profile.webp') }}">

    <!-- PWA -->
    <meta name="theme-color" content="#efd166" />
    <link rel="apple-touch-icon" href="/logo512.png">
    <link rel="manifest" href="/manifest.json">

    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "Person",
        "name": "Taylor Canabarro de Souza",
        "alternateName": "Tayouza",
        "jobTitle": "Software Engineer",
        "url": "{{ url('/') }}",
        "sameAs": [
            "https://www.linkedin.com/in/taylorcanabarro/",
            "https://www.github.com/tayouza"
        ]
    }
    </script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />

    <!-- Preload profile image -->
    <link rel="preload" as="image" href="{{ Vite::asset('resources/images/profile.webp') }}">

    <!-- Scripts -->
    @darkTheme
    @livewireScriptConfig
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    class="antialiased relative min-h-screen bg-center bg-zinc-100 bg-dots-darker dark:bg-dots-lighter dark:bg-zinc-900 selection:bg-amber-500 selection:text-white">

    {{-- Navbar --}}
    <x-navbar />

    {{-- Hero Section --}}
    <header id="hero" class="max-w-5xl mx-auto flex flex-col sm:flex-row items-center gap-8 sm:gap-12 pt-28 sm:pt-36 pb-12 px-4 sm:px-6">
        <div class="reveal-scale">
            <x-img-profile />
        </div>
        <div class="flex flex-col items-center sm:items-start gap-4 reveal-right">
            <x-bio-profile />
            <x-social-medias />
        </div>
    </header>

    <main class="w-full flex flex-col items-center">
        {{-- About Me --}}
        <article class="w-full py-8">
            <x-about-me />
        </article>

        {{-- Experience Timeline --}}
        <article class="w-full bg-zinc-50 dark:bg-zinc-800/50 py-8">
            <x-timeline />
        </article>

        {{-- Skills --}}
        <article id="skills" class="w-full py-12 px-4">
            <div class="text-center mb-8 reveal">
                <h2 class="section-heading">Skills</h2>
                <p class="section-subheading">Minhas competências técnicas e interpessoais</p>
            </div>
            <div class="max-w-6xl mx-auto flex flex-col xl:flex-row gap-8 justify-center items-stretch">
                <div class="reveal-left flex-1">
                    <x-my-hard-skills />
                </div>
                <div class="reveal-right flex-1">
                    <x-my-soft-skills />
                </div>
            </div>
        </article>

        {{-- Projects --}}
        <article class="w-full bg-zinc-50 dark:bg-zinc-800/50 py-8">
            <x-projects />
        </article>

        {{-- Contact --}}
        <article id="contato" class="w-full py-12 px-4">
            <div class="max-w-2xl mx-auto">
                <div class="text-center mb-8 reveal">
                    <h2 class="section-heading">Contato</h2>
                    <p class="section-subheading">Agende uma conversa ou envie-me uma mensagem</p>
                </div>
                <div class="flex flex-col gap-4 reveal">
                    <x-contact class="text-center" />
                    <livewire:contact-form />
                </div>
            </div>
        </article>

        {{-- Footer --}}
        <footer class="w-full py-6 text-center border-t border-zinc-200 dark:border-zinc-700">
            <span class="text-sm font-light text-zinc-500 dark:text-zinc-400">&copy; Tayouza, {{ date('Y') }}</span>
        </footer>
    </main>

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