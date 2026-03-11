<div {{$attributes->merge(['class' => 'bg-white/60 dark:bg-zinc-800/60 backdrop-blur-sm sm:w-auto w-full py-8 px-4 sm:px-8 rounded-2xl
    border border-zinc-200 dark:border-zinc-700 shadow-sm
    transition-all duration-300
    hover:shadow-lg hover:shadow-amber-500/10'])}}>
    <h3 class="section-heading text-center mb-6">{{$titleBox}}</h3>
    <ul class="md:grid md:grid-cols-2 gap-2 w-full flex flex-col">
        {{$slot}}
    </ul>
</div>