<div class="flex justify-between">
  <div class="flex gap-2">
    {{$slot}}
    <span>{{$skill}}</span>
  </div>
  <x-level points="{{$level}}"/>
</div>