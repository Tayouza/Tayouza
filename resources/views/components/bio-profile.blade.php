<div {{$attributes->merge(['class' => 'text-center sm:text-left'])}}>
    <h1 class="text-4xl sm:text-5xl font-bold text-zinc-900 dark:text-white leading-tight">
        Taylor Canabarro <span class="text-gradient-gold">de Souza</span>
    </h1>
    <p class="mt-2 text-lg text-zinc-500 dark:text-zinc-400">{{$year}} Anos</p>
    <div class="mt-3 flex flex-wrap gap-2 justify-center sm:justify-start">
        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-semibold bg-amber-100 dark:bg-amber-900/30 text-amber-700 dark:text-amber-300">
            Software Engineer
        </span>
        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-zinc-200 dark:bg-zinc-700 text-zinc-600 dark:text-zinc-300">
            Full Stack Pleno
        </span>
    </div>
    <div class="mt-6 flex flex-wrap gap-3 justify-center sm:justify-start">
        <a href="#projects" class="btn-primary">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
            Ver Projetos
        </a>
        <a href="#contato" class="btn-outline">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
            Contato
        </a>
        <div class="relative" x-data="{ open: false }">
            <button x-on:click="open = !open" type="button" class="btn-outline">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
                Currículo
                <svg class="w-3 h-3 ml-1 transition-transform" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
            <div x-show="open" x-on:click.away="open = false" x-cloak
                 x-transition:enter="transition ease-out duration-150"
                 x-transition:enter-start="opacity-0 scale-95"
                 x-transition:enter-end="opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-100"
                 x-transition:leave-start="opacity-100 scale-100"
                 x-transition:leave-end="opacity-0 scale-95"
                 class="absolute left-0 mt-2 w-44 rounded-lg shadow-lg bg-white dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 z-50 overflow-hidden">
                <a href="{{ asset('cv.pdf') }}" download
                   class="flex items-center gap-2 px-4 py-2.5 text-sm text-zinc-700 dark:text-zinc-200 hover:bg-amber-50 dark:hover:bg-amber-900/20 transition-colors">
                    🇧🇷 Português
                </a>
                <a href="{{ asset('cv-en.pdf') }}" download
                   class="flex items-center gap-2 px-4 py-2.5 text-sm text-zinc-700 dark:text-zinc-200 hover:bg-amber-50 dark:hover:bg-amber-900/20 transition-colors">
                    🇺🇸 English
                </a>
            </div>
        </div>
    </div>
</div>