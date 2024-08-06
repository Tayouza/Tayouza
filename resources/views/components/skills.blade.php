<div {{$attributes->merge(['class' => 'bg-[#ffffff44] sm:w-auto w-full py-10 px-4 sm:px-10 text-center rounded-md
    duration-300
    hover:scale-110 hover:shadow-lg hover:shadow-[#00000033]'])}}>
    <h3 class="text-4xl mb-5">{{$titleBox}}</h3>
    <ul class="md:grid md:grid-cols-2 gap-2 w-full flex flex-col">
        {{$slot}}
    </ul>
</div>