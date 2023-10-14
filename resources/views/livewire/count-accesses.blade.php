<div>
    <h2 class="text-xl text-zinc-900 dark:text-white border-b border-zinc-300 dark:border-zinc-600">
        Número de acessos
    </h2>
    <div class="p-2 flex flex-col gap-2">
        <section class="rounded bg-gray-100 p-4 dark:bg-zinc-900">
            <canvas id="myChart"></canvas>
        </section>
        <section class="rounded bg-gray-100 p-4 dark:bg-zinc-900">
            @forelse ($accesses as $date => $groupAccess)
                <span class="text-zinc-900 dark:text-white text-sm">{{ $date }}</span>
                <ul class="list-[circle] italic grid grid-cols-3">
                    @forelse ($groupAccess as $access)
                        <li class="text-zinc-900 dark:text-zinc-400 text-xs">
                            <a href="https://www.google.com/maps/search/{{ $access->location['lat'] }},{{ $access->location['lon'] }}" target="_blank">{{ $access->ip }}</a>
                        </li>
                    @empty
                        <span class="text-zinc-900 dark:text-white text-sm">Nenhum registro neste dia!</span>
                    @endforelse
                </ul>
            @empty
                <span class="text-zinc-900 dark:text-white text-sm">Nenhum registro!</span>
            @endforelse
        </section>
    </div>

    <script type="module">
        const myChart = document.getElementById('myChart');

        new Chart(myChart, {
            type: 'bar',
            data: {
                labels: {!! $accesses->keys() !!},
                datasets: [{
                    label: 'Número de Acessos',
                    data: {!! $accessesCount !!},
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                color: '#6366f1',
                borderColor: '#6366f1',
                hoverBackgroundColor: '#6366f1',
            }
        });
    </script>

</div>