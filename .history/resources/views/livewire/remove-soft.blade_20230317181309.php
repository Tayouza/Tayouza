<div class="p-4 text-center">
    <h2 class="dark:text-white">Você deseja excluir a softskill <strong class="dark:text-white">{{$this->soft->name}}</strong>?</h2>
    <div class="flex mt-3 gap-2">
        <button wire:click="delete">
            <x-button wire:click="$emit('closeModal')">
                Não
            </x-button>
            <x-button wire:click="$emit('closeModal')">
                Sim
            </x-button>
        </button>
    </div>
</div>
