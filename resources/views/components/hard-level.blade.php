<li class="flex justify-between items-center gap-2">
    <div class="flex gap-3 items-center">
        {{$slot}}
        <span>{{$skill}}</span>
    </div>
    <x-level points="{{$level}}" />
</li>