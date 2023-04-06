<div class="flex flex-col gap-2">
    <h2 class="text-xl text-zinc-900 dark:text-white border-b border-zinc-300 dark:border-zinc-600">
        Softskills
    </h2>
    <form class="my-3 flex flex-col items-center gap-3 w-full" wire:submit.prevent="save({{$this->softskillId}})">
        <div class="flex flex-col gap-2 w-full">
            <x-input wire:model.defer="name" label="Nome" placeholder="Nome da skill" />
        </div>
        <div>
            <x-button type="submit" outline primary label="Salvar" />
        </div>
    </form>
    <div class="rounded bg-gray-100 p-4 dark:bg-zinc-900">
        <h3 class="text-xl text-zinc-900 dark:text-white">Itens {{$this->lastOrder}}</h3>
        <hr>
        <ul class="flex flex-col lg:grid lg:grid-cols-2 gap-y-2 gap-x-6 p-2 w-full">
            @foreach ($this->softskills as $softskill)
            <li class="flex flex-row gap-10 justify-between">
                <span class="text-zinc-900 dark:text-white">
                    {{$softskill->name}}
                </span>
                <div class="flex gap-2">
                    <x-icons.edit class="w-4 fill-blue-500 cursor-pointer" wire:click="edit({{$softskill->id}})" />
                    <x-icons.trash class="w-4 fill-red-500 cursor-pointer"
                        wire:click="$emit('openModal', 'remove-soft', {{ json_encode(['id' => $softskill->id]) }})" />
                    <div class="flex flex-col gap-1 w-4 items-center justify-center">
                        @if($this->softskills->count() > 1)
                        @if ($softskill->order !== 1 && $softskill->order !== $this->lastOrder)
                        <x-icons.arrow-up class="fill-white cursor-pointer fill-zinc-700 dark:fill-white hover:fill-zinc-400"
                            wire:click="upOrder({{$softskill->order}})" />
                        <x-icons.arrow-down class="fill-white cursor-pointer fill-zinc-700 dark:fill-white hover:fill-zinc-400"
                            wire:click="downOrder({{$softskill->order}})" />
                        @elseif ($softskill->order === 1)
                        <x-icons.arrow-down class="fill-white cursor-pointer fill-zinc-700 dark:fill-white hover:fill-zinc-400"
                            wire:click="downOrder({{$softskill->order}})" />
                        @elseif ($softskill->order === $this->lastOrder)
                        <x-icons.arrow-up class="fill-white cursor-pointer fill-zinc-700 dark:fill-white hover:fill-zinc-400"
                            wire:click="upOrder({{$softskill->order}})" />
                        @endif
                        @endif
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>