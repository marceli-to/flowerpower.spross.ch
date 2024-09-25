<footer class="mt-20 xl:mt-60 pb-20 xl:pb-60">
  <x-layout.inner>
    <div class="flex justify-start flex-wrap gap-15 xl:gap-20">
      <x-buttons.primary href="/">
        Bericht auf Tele Züri
      </x-buttons.primary>
      <x-buttons.primary href="/" class="bg-moss">
        Insta Künstler
      </x-buttons.primary>
      <x-buttons.primary href="/">
        Spross
      </x-buttons.primary>
      <x-buttons.primary href="/" class="bg-moss">
        Zeitung
      </x-buttons.primary>
      <x-buttons.primary href="/">
        Video
      </x-buttons.primary>
    </div>
    <img 
      src="{{ asset('media/logo-claim.png') }}" 
      alt="Spross Transport & Recycling AG" 
      class="block mx-auto w-full h-auto max-w-4xl" />
  </x-layout.inner>
</footer>
@vite('resources/js/app.js')
</body>
</html>
<!-- made with ❤ by stoz.ch & marceli.to -->