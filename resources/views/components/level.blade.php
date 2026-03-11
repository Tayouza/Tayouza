@props([
  'points' => 0
])
@php
  $percent = round(($points / 8) * 100);
@endphp
<div class="flex items-center gap-3 flex-1">
    <div class="progress-bar-track flex-1">
        <div class="progress-bar-fill" data-width="{{ $percent }}" style="width: 0%"></div>
    </div>
    <span class="text-xs font-semibold text-zinc-500 dark:text-zinc-400 w-10 text-right">{{ $percent }}%</span>
</div>