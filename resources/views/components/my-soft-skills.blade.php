<x-skills title-box="Soft Skills">
    @foreach ($softskills as $softskill)
    <li>
        <p class="text-lg">{{$softskill->name}}</p>
    </li>
    @endforeach
</x-skills>