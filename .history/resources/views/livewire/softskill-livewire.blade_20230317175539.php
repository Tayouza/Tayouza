<div class="flex flex-col gap-2">
    <h2 class="text-xl text-zinc-900 dark:text-white border-b border-zinc-300 dark:border-zinc-600">
        Softskills
    </h2>
    <form class="mt-3 flex flex-col items-center gap-3 w-full">
        <div class="flex flex-col gap-2 w-full">
            <x-input wire:model.defer="name" label="Nome" placeholder="Nome da skill" />
        </div>
        <div>
            <x-button outline primary label="Salvar" wire:click="save({{$this->softskillId}})" />
        </div>
    </form>
    <div class="rounded bg-gray-100 p-4 dark:bg-zinc-900">
        <h3 class="text-xl text-zinc-900 dark:text-white">Itens</h3>
        <hr>
        <ul class="flex flex-col lg:grid lg:grid-cols-2 gap-2 p-2 w-full">
            @foreach ($this->softskills as $softskill)
                <li class="flex flex-row justify-between text-zinc-900 dark:text-white">
                    {{$softskill->name}}
                    <div class="flex gap-2">
                        <x-icons.edit class="w-4 fill-blue-500 cursor-pointer" wire:click="edit({{$softskill->id}})" />
                        <x-icons.trash class="w-4 fill-red-500 cursor-pointer"
                            wire:click="$emit('openModal', 'remove-modal', {{ json_encode(['id' => $softskill->id, 'model' => 'softskill']) }})"/>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>