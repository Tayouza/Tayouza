<div>
    <h2 class="text-xl text-zinc-900 dark:text-white border-b border-zinc-300 dark:border-zinc-600">
        Hardskills
    </h2>
    <form class="mt-3 flex flex-col items-center gap-3 w-full" wire:submit.prevent="save">
        <div class="flex flex-col gap-2 w-full">
            <x-input wire:model.defer="name" label="Nome" placeholder="Nome da skill" />
            <x-inputs.number wire:model.defer="level" label="Nível" placeholder="1" min="1" max="8" />
            <div>
                <x-input type="file" wire:model.defer="icon" label="Ícone" accept="image/*" />
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF.</p>
            </div>
        </div>
        <div>
            <x-button outline primary label="Salvar" />
        </div>
    </form>
    <div class="rounded bg-gray-100 p-4 dark:bg-zinc-900">
        <h3 class="text-xl text-zinc-900 dark:text-white">Itens</h3>
        <hr>
        <ul class="grid grid-cols-2 gap-2 p-2 w-full">
            @foreach ($this->hardskills as $hardskill)
            <li class="flex flex-row gap-4">
                <span class="text-zinc-900 dark:text-white">
                    {{$hardskill->name}}
                </span>
                <span class="text-zinc-900 dark:text-white">
                    {{$hardskill->level}}
                </span>
                <div class="flex gap-2">
                    <x-icons.edit class="w-4 fill-blue-500 cursor-pointer" wire:click="edit({{$hardskill->id}})" />
                    <x-icons.trash class="w-4 fill-red-500 cursor-pointer"
                        wire:click="$emit('openModal', 'remove-hard', {{ json_encode(['id' => $hardskill->id]) }})"/>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>