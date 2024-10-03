<div 
  class="h-screen w-full relative overflow-hidden" 
  data-hero-container>

  <div class="w-full justify-center max-w-[400px] h-full z-50 absolute top-40 right-40">
    <img 
      src="{{ asset('media/hero-badge.svg') }}" 
      width="331" 
      height="306" 
      alt=""
      class="block absolute inset-0"
      data-hero-badge />
  </div>

  <div 
    class="absolute inset-0 origin-[50%_35%] w-full h-full bg-cover bg-center bg-hero-image-sm md:bg-hero-image-md xl:bg-hero-image-lg" 
    data-hero-image>
  </div>
  <div class="absolute inset-0 w-full h-full">
    <h1 
      class="hero-title absolute -bottom-[355px] left-80" 
      data-hero-title>
      <x-hero.title class="block w-full h-auto max-w-[890px]" />
    </h1>
    <div 
      class="hero-claim absolute -bottom-[600px] left-80" 
      data-hero-claim>
      <x-hero.claim class="block w-full h-auto max-w-[750px]" />
    </div>
  </div>
</div>
