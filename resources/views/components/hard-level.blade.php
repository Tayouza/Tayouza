<div class="flex justify-between items-center">
  <div class="flex gap-3 items-center">
    {{$slot}}
    <span>{{$skill}}</span>
  </div>
  <x-level points="{{$level}}"/>
</div>