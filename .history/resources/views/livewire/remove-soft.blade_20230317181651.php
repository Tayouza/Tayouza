<div class="p-4 flex flex-col items-center">
    <h2 class="dark:text-white">Você deseja excluir a softskill <strong
            class="dark:text-white">{{$this->soft->name}}</strong>?</h2>
    <div class="flex mt-3 gap-2">
        <x-button.circle negative icon="x" wire:click="$emit('closeModal')">
            Não
        </x-button.circle>
        <button wire:click="$emit('closeModal')">
            <x-button.circle positive icon="check" wire:click="delete">
                Sim
            </x-button.circle>
        </button>
    </div>
</div>