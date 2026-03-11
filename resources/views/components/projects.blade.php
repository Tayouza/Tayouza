<section id="projects" class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="text-center mb-8 reveal">
        <h2 class="section-heading">Projetos</h2>
        <p class="section-subheading">Algumas das soluções que desenvolvi</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($projects as $project)
        <a href="{{$project->url}}" class="project-card reveal" target="_blank" rel="noopener noreferrer">
            <img src="{{ asset("storage/{$project->file->path}") }}" alt="{{ $project->name }}" loading="lazy" decoding="async">
            <div class="card-overlay">
                <h3 class="card-title">{{ $project->name }}</h3>
                <p class="card-desc">{{ $project->description }}</p>
            </div>
            <div class="card-icon">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                </svg>
            </div>
        </a>
        @endforeach
    </div>
</section>