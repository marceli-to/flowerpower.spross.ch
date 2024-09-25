@props(['href', 'target' => '_blank'])
<a href="{{ $href }}" target="{{ $target }}" {{ $attributes->merge(['class' => 'bg-fern inline-flex items-center hover:bg-olive transition-colors text-white whitespace-nowrap px-6 xl:px-12 py-3 xl:py-6 xl:ml-10 leading-none rounded-full']) }}">
  {{ $slot }}
</a>