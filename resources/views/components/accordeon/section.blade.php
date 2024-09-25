@props(['index'])
<div 
  {{ $attributes->merge(['class' => 'relative overflow-hidden max-h-0']) }}
  x-ref="container{{ $index }}" 
  x-bind:style="selected == {{ $index }} ? 'max-height: ' + $refs.container{{ $index }}.scrollHeight + 'px;' : ''">
  <div class="text-lg text-fern py-15 xl:px-60">
    {{ $slot }}
  </div>
</div>