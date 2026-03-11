<li class="flex items-center gap-3 py-2">
    <div class="flex items-center gap-2 min-w-[120px]">
        {{$slot}}
        <span class="font-medium text-zinc-700 dark:text-zinc-200 text-sm">{{$skill}}</span>
    </div>
    <x-level points="{{$level}}" />
</li>