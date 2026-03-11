<div>
    @if (session()->has('message'))
        <div class="bg-green-100 dark:bg-green-900/30 border border-green-300 dark:border-green-700 text-green-700 dark:text-green-300 px-4 py-3 rounded-lg mb-4 text-sm">
            ✅ Mensagem enviada com sucesso! Retornarei em breve.
        </div>
    @endif

    <form wire:submit="submit" class="flex flex-col gap-3 w-full">
        <div>
            <input wire:model="name" placeholder="Nome" type="text"
                class="w-full rounded-xl border border-zinc-300 dark:border-zinc-600 px-4 py-3
                       bg-white/90 dark:bg-zinc-800/90 focus:bg-white dark:focus:bg-zinc-800
                       text-zinc-700 dark:text-zinc-200 placeholder-zinc-400 dark:placeholder-zinc-500
                       focus:outline-none focus:ring-2 focus:ring-amber-500/50 focus:border-amber-500
                       transition-all duration-200" />
            @error('name')
                <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <input wire:model="email" placeholder="Email" type="email"
                class="w-full rounded-xl border border-zinc-300 dark:border-zinc-600 px-4 py-3
                       bg-white/90 dark:bg-zinc-800/90 focus:bg-white dark:focus:bg-zinc-800
                       text-zinc-700 dark:text-zinc-200 placeholder-zinc-400 dark:placeholder-zinc-500
                       focus:outline-none focus:ring-2 focus:ring-amber-500/50 focus:border-amber-500
                       transition-all duration-200" />
            @error('email')
                <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <textarea wire:model="contactMessage" placeholder="Mensagem" rows="4"
                class="w-full rounded-xl border border-zinc-300 dark:border-zinc-600 px-4 py-3
                       bg-white/90 dark:bg-zinc-800/90 focus:bg-white dark:focus:bg-zinc-800
                       text-zinc-700 dark:text-zinc-200 placeholder-zinc-400 dark:placeholder-zinc-500
                       focus:outline-none focus:ring-2 focus:ring-amber-500/50 focus:border-amber-500
                       transition-all duration-200 resize-none"></textarea>
            @error('contactMessage')
                <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit"
            class="btn-primary w-full justify-center relative"
            wire:loading.attr="disabled"
            wire:loading.class="opacity-70 cursor-wait">
            <span wire:loading.remove>
                <svg class="w-5 h-5 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                </svg>
                Enviar Mensagem
            </span>
            <span wire:loading class="flex items-center gap-2" style="display:none">
                <svg class="animate-spin w-5 h-5" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path>
                </svg>
                Enviando...
            </span>
        </button>
    </form>

    <script>
        document.addEventListener('livewire:init', () => {
            Livewire.on('contact-sent', () => {
                // Auto-hide success message after 5s
                setTimeout(() => {
                    const msg = document.querySelector('[wire\\:id] .bg-green-100, [wire\\:id] .bg-green-900\\/30');
                    if (msg) msg.style.display = 'none';
                }, 5000);
            });
        });
    </script>
</div>
