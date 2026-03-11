<x-skills title-box="Soft Skills">
    @foreach ($softskills as $softskill)
    <li>
        <span class="soft-chip">{{$softskill->name}}</span>
    </li>
    @endforeach
</x-skills>