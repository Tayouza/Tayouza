<div class="p-4 text-center">
    <h2 class="dark:text-white">Você deseja excluir a softskill <strong
            class="dark:text-white">{{$this->soft->name}}</strong>?</h2>
    <div class="flex mt-3 gap-2">
        <x-button.circle positive icon="check"  wire:click="delete">
            <button wire:click="$emit('closeModal')">
                Não
            </button>
        </x-button.circle>
        <x-button.circle negative icon="x"  wire:click="$emit('closeModal')">
            Sim
        </x-button.circle>
    </div>
</div>