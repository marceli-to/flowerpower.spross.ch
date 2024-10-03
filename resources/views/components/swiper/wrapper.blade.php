@props(['class' => ''])
<div class="swiper js-swiper {{ $class }}">
  <div class="swiper-wrapper">
    {{ $slot }}
  </div>
  <a 
    href="javascript:;" 
    class="js-swiper-prev lg:p-30 absolute z-50 top-1/2 -translate-y-1/2 left-15">
    <x-icons.prev class="w-36 h-auto block text-white" />
  </a>
  <a 
    href="javascript:;" 
    class="js-swiper-next lg:p-30 absolute z-50 top-1/2 -translate-y-1/2 right-15">
    <x-icons.next class="w-36 h-auto block text-white" />
  </a>
</div>