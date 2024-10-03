@props(['index'])
<div 
  {{ $attributes->merge(['class' => 'relative overflow-hidden max-h-0']) }}
  x-ref="container{{ $index }}" 
  x-bind:style="selected == {{ $index }} ? 'max-height: ' + $refs.container{{ $index }}.scrollHeight + 'px;' : ''">
  <div class="text-xs sm:text-md lg:text-lg 2xl:text-xl text-fern py-10 lg:py-15 2xl:py-25 sm:px-20 md:px-60">
    {{ $slot }}
  </div>
</div>