@props([
  'points' => 0
])
<div class="flex">
  @for ($i = 0; $i < $points; $i++)
    <div>
      <div class="border border-black rounded-[50%] w-5 h-5 flex justify-center items-center">
      <span class="ball-md glow"></span>
      </div>
    </div>
  @endfor
  @for ($i = 0; $i < (8 - $points); $i++)
    <div>
      <div class="border border-black rounded-[50%] w-5 h-5"></div>
    </div>
  @endfor
</div>