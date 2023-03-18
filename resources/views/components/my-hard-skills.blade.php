<x-skills class="flex flex-col gap-2" title-box="Hard Skills">
    @foreach ($hardskills as $hardskill)
    @php
        $iconPath = $hardskill->file->path;
    @endphp
    <x-hard-level skill="{{$hardskill->name}}" level="{{$hardskill->level}}">
        <img src="{{asset("storage/$iconPath")}}" class="w-8 h-8" >
    </x-hard-level>
    @endforeach
</x-skills>