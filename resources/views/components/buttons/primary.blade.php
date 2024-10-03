@props(['href', 'target' => '_blank'])
<a href="{{ $href }}" target="{{ $target }}" {{ $attributes->merge(['class' => 'bg-fern hover:bg-olive transition-colors text-white whitespace-nowrap px-10 xl:px-30 py-5 xl:py-15 uppercase leading-none rounded-full']) }}">
  {{ $slot }}
</a>