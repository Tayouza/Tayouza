<div>
    <h2 class="text-xl text-zinc-900 dark:text-white border-b border-zinc-300 dark:border-zinc-600">
        Hardskills
    </h2>
    <form class="my-3 flex flex-col items-center gap-3 w-full" wire:submit.prevent="save({{$this->hardskillId}})">
        <div class="flex flex-col gap-2 w-full">
            <x-input wire:model.defer="name" label="Nome" placeholder="Nome da skill" />
            <x-inputs.number wire:model.defer="level" label="Nível" placeholder="1" min="1" max="8" />
            <div class="flex gap-4">
                <div class="w-full">
                    <x-input type="file" wire:model.defer="icon" label="Ícone" accept="image/*" />
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF.
                    </p>
                </div>
                @if ($icon || $iconPath)
                <div class="flex flex-col items-center justify-center">
                    <span class="text-zinc-900 dark:text-white">preview:</span>
                    @if(isset($iconPath))
                    <img src="{{asset(" storage/$iconPath")}}" class="w-8 h-8">
                    @else
                    <img src="{{ $icon->temporaryUrl() }}" class="w-8">
                    @endif
                </div>
                @endif
            </div>
        </div>
        <div>
            <x-button type="submit" outline primary label="Salvar" />
        </div>
    </form>
    <div class="rounded bg-gray-100 p-4 dark:bg-zinc-900">
        <h3 class="text-xl text-zinc-900 dark:text-white">Itens {{$this->lastOrder}}</h3>
        <hr>
        <ul class="flex flex-col lg:grid lg:grid-cols-2 gap-y-2 gap-x-6 p-2 w-full">
            @foreach ($this->hardskills as $hardskill)
            @php
            $iconPath = $hardskill->file->path;
            @endphp
            <li class="flex flex-row gap-10 justify-between">
                <div class="flex justify-between items-center w-full">
                    <div class="flex gap-1 items-center">
                        <img src="{{asset("storage/$iconPath")}}" class="w-8 h-8">
                        <span class="text-zinc-900 dark:text-white">
                            {{$hardskill->name}}
                        </span>
                    </div>
                    <span class="text-zinc-700 dark:text-zinc-300">
                        level: {{$hardskill->level}}
                    </span>
                </div>
                <div class="flex gap-2">
                    <x-icons.edit class="w-4 fill-blue-500 cursor-pointer" wire:click="edit({{$hardskill->id}})" />
                    <x-icons.trash class="w-4 fill-red-500 cursor-pointer"
                        wire:click="$emit('openModal', 'remove-hard', {{ json_encode(['id' => $hardskill->id]) }})" />
                </div>
                <div class="flex flex-col gap-1 w-6 items-center justify-center">
                    @if($this->hardskills->count() > 1)
                        @if ($hardskill->order !== 1 && $hardskill->order !== $this->lastOrder)
                        <x-icons.arrow-up class="fill-white cursor-pointer hover:fill-zinc-400"
                            wire:click="upOrder({{$hardskill->order}})" />
                        <x-icons.arrow-down class="fill-white cursor-pointer hover:fill-zinc-400"
                            wire:click="downOrder({{$hardskill->order}})" />
                        @elseif ($hardskill->order === 1)
                        <x-icons.arrow-down class="fill-white cursor-pointer hover:fill-zinc-400"
                            wire:click="downOrder({{$hardskill->order}})" />
                        @elseif ($hardskill->order === $this->lastOrder)
                        <x-icons.arrow-up class="fill-white cursor-pointer hover:fill-zinc-400"
                            wire:click="upOrder({{$hardskill->order}})" />
                        @endif
                    @endif
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>