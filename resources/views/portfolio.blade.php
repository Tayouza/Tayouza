<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="{{Vite::asset('resources/images/favicon.ico')}}" type="image/x-icon">
  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
  class="antialiased relative sm:flex sm:flex-col sm:items-center min-h-screen bg-center bg-zinc-100 bg-dots-lighter dark:bg-zinc-900 selection:bg-red-500 selection:text-white">
  @if (Route::has('login'))
  <div class="fixed -top-2 right-0 p-6 text-right opacity-[0.01]">
    @auth
    <a href="{{ url('/dashboard') }}"
      class="font-semibold text-zinc-600 hover:text-zinc-900 dark:text-zinc-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
    @else
    <a href="{{ route('login') }}"
      class="font-semibold text-zinc-600 hover:text-zinc-900 dark:text-zinc-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
      in</a>
    @endauth
  </div>
  @endif

  <x-logo class="fixed top-4 left-4" />

  <header class="container flex flex-col items-center gap-4 mt-28">
    <x-img-profile />
    <x-bio-profile :year="$year" />
    <x-social-medias />
  </header>
  <main class="w-full flex flex-col items-center gap-4 mt-28">
    <article class="w-full bg-primary-100 flex flex-col sm:flex-row gap-8 justify-center items-center py-12">
      <x-skills class="flex flex-col gap-2">
        <h3 class="text-4xl mb-5">Hard Skills</h3>
        <x-hard-level skill="PHP" level="5">
          <x-icons.php class="w-8 h-8" />
        </x-hard-level>
        <x-hard-level skill="Laravel" level="4">
          <x-icons.laravel class="w-8 h-8" />
        </x-hard-level>
        <x-hard-level skill="Javascript" level="3">
          <x-icons.javascript class="w-8 h-8" />
        </x-hard-level>
        <x-hard-level skill="React" level="2">
          <x-icons.react class="w-8 h-8" />
        </x-hard-level>
        <x-hard-level skill="MySQL" level="4">
          <x-icons.mysql class="w-8 h-8" />
        </x-hard-level>
        <x-hard-level skill="HTML" level="7">
          <x-icons.html class="w-8 h-8" />
        </x-hard-level>
        <x-hard-level skill="CSS" level="5">
          <x-icons.css class="w-8 h-8" />
        </x-hard-level>
        <x-hard-level skill="SASS" level="3">
          <x-icons.sass class="w-8 h-8" />
        </x-hard-level>
        <x-hard-level skill="Git" level="4">
          <x-icons.git class="w-8 h-8" />
        </x-hard-level>
        <x-hard-level skill="Docker" level="5">
          <x-icons.docker class="w-8 h-8" />
        </x-hard-level>
        <x-hard-level skill="Linux" level="5">
          <x-icons.linux class="w-8 h-8" />
        </x-hard-level>
      </x-skills>
      <x-skills>
        <h3 class="text-4xl mb-5">Soft Skills</h3>
        <ul class="flex flex-col gap-y-2">
          <li>
            <p class="text-lg">Colaborativo</p>
          </li>
          <li>
            <p class="text-lg">Dedicado</p>
          </li>
          <li>
            <p class="text-lg">Focado</p>
          </li>
          <li>
            <p class="text-lg">Senso lógico</p>
          </li>
          <li>
            <p class="text-lg">Criativo</p>
          </li>
          <li>
            <p class="text-lg">Comunicativo</p>
          </li>
          <li>
            <p class="text-lg">Atencioso</p>
          </li>
          <li>
            <p class="text-lg">Automotivação</p>
          </li>
          <li>
            <p class="text-lg">Empatia</p>
          </li>
          <li>
            <p class="text-lg">Trabalho em equipe</p>
          </li>
          <li>
            <p class="text-lg">Multitasking</p>
          </li>
          <li>
            <p class="text-lg">Resolução de problemas</p>
          </li>
        </ul>
      </x-skills>
    </article>
    <article class="w-full">
      <x-projects />
    </article>
  </main>

</body>

</html>