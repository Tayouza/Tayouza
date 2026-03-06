<div class="p-4 flex flex-col items-center">
    <h2 class="dark:text-white">Você deseja excluir o projeto <strong
            class="dark:text-white">{{$this->project->name}}</strong>?</h2>
    <div class="flex mt-3 gap-2">
        <x-button rounded negative icon="x-mark" label="Não" wire:click="$dispatch('closeModal')" />
        <x-button rounded positive icon="check" label="Sim" wire:click="delete" />
    </div>
</div>