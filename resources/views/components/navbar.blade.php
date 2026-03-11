<nav x-data="{ open: false, scrolled: false }"
    x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 80 })"
    :class="scrolled ? 'bg-white/80 dark:bg-zinc-900/80 backdrop-blur-lg shadow-lg' : 'bg-transparent'"
    class="fixed top-0 left-0 right-0 z-50 transition-all duration-500">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            {{-- Logo --}}
            <a href="#" class="text-xl font-bold text-zinc-900 dark:text-white tracking-tight">
                <span class="bg-gradient-to-r from-amber-500 to-yellow-400 bg-clip-text text-transparent">Tayouza</span>Dev
            </a>

            {{-- Desktop links --}}
            <div class="hidden md:flex items-center gap-8">
                <a href="#sobre" class="nav-link text-sm font-medium text-zinc-600 dark:text-zinc-300 hover:text-amber-500 dark:hover:text-amber-400 transition-colors">Sobre</a>
                <a href="#skills" class="nav-link text-sm font-medium text-zinc-600 dark:text-zinc-300 hover:text-amber-500 dark:hover:text-amber-400 transition-colors">Skills</a>
                <a href="#projects" class="nav-link text-sm font-medium text-zinc-600 dark:text-zinc-300 hover:text-amber-500 dark:hover:text-amber-400 transition-colors">Projetos</a>
                <a href="#contato" class="nav-link text-sm font-medium text-zinc-600 dark:text-zinc-300 hover:text-amber-500 dark:hover:text-amber-400 transition-colors">Contato</a>
                <x-button-change-theme />
            </div>

            {{-- /dashboard (hidden) --}}
            @auth
            <a href="{{ url('/dashboard') }}" class="hidden">Dashboard</a>
            @endauth

            {{-- Mobile hamburger --}}
            <div class="md:hidden flex items-center gap-3">
                <x-button-change-theme />
                <button x-on:click="open = !open" class="text-zinc-600 dark:text-zinc-300 hover:text-amber-500 transition-colors" aria-label="Menu">
                    <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg x-show="open" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    {{-- Mobile menu --}}
    <div x-show="open" x-cloak
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        class="md:hidden bg-white/95 dark:bg-zinc-900/95 backdrop-blur-lg border-t border-zinc-200 dark:border-zinc-700">
        <div class="px-4 py-4 flex flex-col gap-3">
            <a x-on:click="open = false" href="#sobre" class="text-zinc-700 dark:text-zinc-200 hover:text-amber-500 font-medium py-2 transition-colors">Sobre</a>
            <a x-on:click="open = false" href="#skills" class="text-zinc-700 dark:text-zinc-200 hover:text-amber-500 font-medium py-2 transition-colors">Skills</a>
            <a x-on:click="open = false" href="#projects" class="text-zinc-700 dark:text-zinc-200 hover:text-amber-500 font-medium py-2 transition-colors">Projetos</a>
            <a x-on:click="open = false" href="#contato" class="text-zinc-700 dark:text-zinc-200 hover:text-amber-500 font-medium py-2 transition-colors">Contato</a>
        </div>
    </div>
</nav>
