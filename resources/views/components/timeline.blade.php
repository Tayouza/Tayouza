<section id="experiencia" class="w-full max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="text-center mb-12 reveal">
        <h2 class="section-heading">Experiência</h2>
        <p class="section-subheading">Minha trajetória profissional</p>
    </div>

    <div class="relative">
        {{-- Vertical line --}}
        <div class="absolute left-4 md:left-1/2 md:-translate-x-1/2 top-0 bottom-0 w-0.5 bg-gradient-to-b from-amber-500 via-zinc-300 dark:via-zinc-600 to-zinc-300 dark:to-zinc-600"></div>

        {{-- Item 1: Fundatec --}}
        <div class="relative flex flex-col md:flex-row items-start md:items-center mb-12 reveal">
            {{-- Dot --}}
            <div class="absolute left-4 md:left-1/2 transform -translate-x-1/2 w-4 h-4 rounded-full bg-amber-500 border-4 border-white dark:border-zinc-900 z-10 shadow-lg shadow-amber-500/30"></div>

            {{-- Content left (desktop) --}}
            <div class="w-full md:w-5/12 md:pr-8 md:text-right pl-12 md:pl-0">
                <div class="bg-white/80 dark:bg-zinc-800/80 backdrop-blur-sm rounded-2xl p-5 border border-zinc-200 dark:border-zinc-700 shadow-sm hover:shadow-md transition-shadow">
                    <span class="text-xs font-semibold text-amber-600 dark:text-amber-400 uppercase tracking-wider">Atual</span>
                    <h3 class="text-lg font-bold text-zinc-900 dark:text-white mt-1">Desenvolvedor Pleno</h3>
                    <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Fundatec</p>
                    <p class="text-sm text-zinc-600 dark:text-zinc-300 mt-2 leading-relaxed">
                        Responsável pela arquitetura e manutenção de sistemas críticos, utilizando PHP (Laravel), JavaScript e jQuery.
                        Foco em transformar requisitos complexos em funcionalidades de alto desempenho.
                    </p>
                    <div class="flex flex-wrap gap-1 mt-3 justify-start md:justify-end">
                        <span class="text-xs px-2 py-0.5 rounded-full bg-amber-100 dark:bg-amber-900/30 text-amber-700 dark:text-amber-300">PHP</span>
                        <span class="text-xs px-2 py-0.5 rounded-full bg-amber-100 dark:bg-amber-900/30 text-amber-700 dark:text-amber-300">Laravel</span>
                        <span class="text-xs px-2 py-0.5 rounded-full bg-amber-100 dark:bg-amber-900/30 text-amber-700 dark:text-amber-300">JavaScript</span>
                    </div>
                </div>
            </div>

            {{-- Spacer for center alignment --}}
            <div class="hidden md:block md:w-2/12"></div>
        </div>

        {{-- Item 2: Zero62 --}}
        <div class="relative flex flex-col md:flex-row-reverse items-start md:items-center mb-12 reveal">
            {{-- Dot --}}
            <div class="absolute left-4 md:left-1/2 transform -translate-x-1/2 w-4 h-4 rounded-full bg-zinc-400 dark:bg-zinc-500 border-4 border-white dark:border-zinc-900 z-10"></div>

            {{-- Content right (desktop) --}}
            <div class="w-full md:w-5/12 md:pl-8 pl-12 md:text-left">
                <div class="bg-white/80 dark:bg-zinc-800/80 backdrop-blur-sm rounded-2xl p-5 border border-zinc-200 dark:border-zinc-700 shadow-sm hover:shadow-md transition-shadow">
                    <h3 class="text-lg font-bold text-zinc-900 dark:text-white">Desenvolvedor</h3>
                    <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Zero62</p>
                    <p class="text-sm text-zinc-600 dark:text-zinc-300 mt-2 leading-relaxed">
                        Atuação no desenvolvimento de APIs e plataformas robustas. Experiência ativa em Code Reviews,
                        garantindo padrões de qualidade e disseminação de conhecimento técnico na equipe.
                    </p>
                    <div class="flex flex-wrap gap-1 mt-3">
                        <span class="text-xs px-2 py-0.5 rounded-full bg-zinc-200 dark:bg-zinc-700 text-zinc-600 dark:text-zinc-300">APIs</span>
                        <span class="text-xs px-2 py-0.5 rounded-full bg-zinc-200 dark:bg-zinc-700 text-zinc-600 dark:text-zinc-300">Code Review</span>
                        <span class="text-xs px-2 py-0.5 rounded-full bg-zinc-200 dark:bg-zinc-700 text-zinc-600 dark:text-zinc-300">Plataformas</span>
                    </div>
                </div>
            </div>

            {{-- Spacer --}}
            <div class="hidden md:block md:w-2/12"></div>
        </div>
    </div>
</section>
