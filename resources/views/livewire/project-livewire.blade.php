<div>
    <h2 class="text-xl text-zinc-900 dark:text-white border-b border-zinc-300 dark:border-zinc-600">
        Projetos
    </h2>
    <form class="my-3 flex flex-col items-center gap-3 w-full" wire:submit.prevent="save({{$this->projectId}})">
        <div class="flex flex-col gap-2 w-full">
            <x-input wire:model.defer="name" label="Nome" placeholder="Nome do projeto" />
            <x-input wire:model.defer="url" label="Url" placeholder="https://" />
            <div class="flex gap-4">
                <div class="w-full">
                    <x-input type="file" wire:model.defer="img" label="Ícone" accept="image/*" />
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF.
                    </p>
                </div>
            </div>
            @if ($img || $imgPath)
            <div class="flex flex-col items-center justify-center">
                <span class="text-zinc-900 dark:text-white">preview:</span>
                @if(isset($imgPath))
                <img src="{{asset(" storage/$imgPath")}}">
                @else
                <img src="{{ $img->temporaryUrl() }}">
                @endif
            </div>
            @endif
        </div>
        <div>
            <x-button type="submit" outline primary label="Salvar" />
        </div>
    </form>
    <div class="rounded bg-gray-100 p-4 dark:bg-zinc-900">
        <h3 class="text-xl text-zinc-900 dark:text-white">Itens</h3>
        <hr>
        <ul class="flex flex-col lg:grid lg:grid-cols-2 gap-y-2 gap-x-6 p-2 w-full">
            @foreach ($this->projects as $project)
            <li class="flex flex-row gap-10 justify-between">
                <div class="flex justify-between items-center w-full">
                    <div class="flex gap-1 items-center">
                        <span class="text-zinc-900 dark:text-white">
                            {{$project->name}}
                        </span>
                    </div>
                </div>
                <div class="flex gap-2">
                    <x-icons.edit class="w-4 fill-blue-500 cursor-pointer" wire:click="edit({{$project->id}})" />
                    <x-icons.trash class="w-4 fill-red-500 cursor-pointer"
                        wire:click="$emit('openModal', 'remove-project', {{ json_encode(['id' => $project->id]) }})" />
                    <div class="flex flex-col gap-1 w-4 items-center justify-center">
                        @if($this->projects->count() > 1)
                        @if ($project->order !== 1 && $project->order !== $this->lastOrder)
                        <x-icons.arrow-up class="fill-white cursor-pointer hover:fill-zinc-400"
                            wire:click="upOrder({{$project->order}})" />
                        <x-icons.arrow-down class="fill-white cursor-pointer hover:fill-zinc-400"
                            wire:click="downOrder({{$project->order}})" />
                        @elseif ($project->order === 1)
                        <x-icons.arrow-down class="fill-white cursor-pointer hover:fill-zinc-400"
                            wire:click="downOrder({{$project->order}})" />
                        @elseif ($project->order === $this->lastOrder)
                        <x-icons.arrow-up class="fill-white cursor-pointer hover:fill-zinc-400"
                            wire:click="upOrder({{$project->order}})" />
                        @endif
                        @endif
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>