<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="flex flex-col lg:grid lg:grid-cols-2 gap-4 container mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-zinc-800 p-4 shadow-sm w-full sm:rounded-lg">
                <livewire:hardskill-livewire />
            </div>
            <div class="bg-white dark:bg-zinc-800 p-4 shadow-sm w-full sm:rounded-lg">
                <livewire:softskill-livewire />
            </div>
            <div class="bg-white dark:bg-zinc-800 p-4 shadow-sm w-full sm:rounded-lg">
                <livewire:project-livewire />
            </div>
            <div class="bg-white dark:bg-zinc-800 p-4 shadow-sm w-full sm:rounded-lg overflow-y-scroll max-h-[600px]">
                <livewire:count-accesses />
            </div>
        </div>
    </div>
</x-app-layout>
