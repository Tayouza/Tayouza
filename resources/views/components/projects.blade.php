<section id="projects">
  <h2 class="text-2xl pt-5 pb-2 text-zinc-900 dark:text-white">Projetos</h2>
  <div class="container-cards">
    <div class="cards">
      @foreach ($projects as $project)
      @php
        $imgPath = $project->file->path;
      @endphp
      <a href="{{$project->url}}" class="card" target="_blank">
        <img src="{{asset("storage/$imgPath")}}">
        <p class="title-card">{{$project->name}}</p>
      </a>
      @endforeach
    </div>
  </div>
</section>