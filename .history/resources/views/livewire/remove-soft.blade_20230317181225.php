<div class="p-4 text-center">
    <h2 class="dark:text-white">Você deseja excluir a softskill <strong class="dark:text-white">{{$this->soft->name}}</strong>?</h2>
    <div class="flex mt-3 gap-2">
        <button wire:click="delete">
            <p class="btn-green-700 py-2 px-5" wire:click="$emit('closeModal')">
                Sim
            </p>
        </button>
        <button class="btn-red-500 py-2 px-5" wire:click="$emit('closeModal')">
            Não
        </button>
    </div>
</div>
