<div 
  class="h-screen w-full relative overflow-hidden" 
  data-hero-container>

  <div class="w-full justify-center max-w-180 md:max-w-[230px] 2xl:max-w-[400px] h-full z-50 absolute top-0 2xl:top-30 right-0 2xl:right-30">
    <img 
      src="{{ asset('media/hero-badge.svg') }}" 
      width="331" 
      height="306" 
      alt=""
      class="block absolute inset-0"
      data-hero-badge />
  </div>

  <div 
    class="absolute inset-0 origin-[50%_35%] w-full h-full bg-cover bg-center bg-hero-image-md md:bg-hero-image-lg" 
    data-hero-image>
  </div>
  <div class="absolute inset-0 w-full h-full">
    <h1 
      class="hero-title absolute -bottom-[110px] sm:-bottom-[180px] md:-bottom-[210px] 2xl:-bottom-[350px] left-15 2xl:left-80" 
      data-hero-title>
      <x-hero.title class="block w-full h-auto max-w-[80%] sm:max-w-[65%] 2xl:max-w-[890px]" />
    </h1>
    <div 
      class="hero-claim absolute -bottom-[200px] sm:-bottom-[300px] md:-bottom-[360px] 2xl:-bottom-[600px] left-15 2xl:left-80" 
      data-hero-claim>
      <x-hero.claim class="block w-full h-auto max-w-[80%] sm:max-w-[65%] 2xl:max-w-[750px]" />
    </div>
  </div>
</div>
