@props(['href', 'target' => '_blank'])
<a href="{{ $href }}" target="{{ $target }}" {{ $attributes->merge(['class' => 'bg-fern inline-flex items-center hover:bg-olive transition-colors text-white whitespace-nowrap px-5 xl:px-10 py-4 xl:py-8 xl:ml-10 leading-none rounded-full']) }}">
  {{ $slot }}
</a>