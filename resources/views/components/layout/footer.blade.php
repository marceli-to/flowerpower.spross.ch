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
      <div class="xl:mt-100">
        <div class="flex justify-center items-center gap-10 xl:gap-20">
          <a 
            href="https://www.facebook.com/Spross.Gruppe" 
            target="_blank"
            rel="noopener noreferrer"
            title="Spross auf Facebook"
            class="group">
            <x-icons.facebook class="text-fern group-hover:text-moss transition-colors" />
          </a>
          <a 
            href="https://www.linkedin.com/company/spross" 
            target="_blank"
            rel="noopener noreferrer"
            title="Spross auf LinkedIn"
            class="group">
            <x-icons.linkedin class="text-fern group-hover:text-moss transition-colors" />
          </a>
        </div>
        <div class="text-sm text-center text-fern mt-20 xl:mt-40">
          &copy; Spross-Gruppe, {{ date('Y') }} &mdash;
          
          <a 
            href="https://www.spross.com/meta/datenschutz"
            target="_blank"
            title="Datenschutz"
            class="inline-block mr-3 hover:text-moss transition-colors hover:underline decoration-1 underline-offset-4">
            Datenschutz
          </a>
          <a
            href="https://www.spross.com/meta/disclaimer"
            target="_blank"
            rel="noopener noreferrer"
            title="Disclaimer"
            class="inline-block mx-3 hover:text-moss transition-colors hover:underline decoration-1 underline-offset-4">
            Disclaimer
          </a>
          <a 
            href="https://www.spross.com/meta/impressum"
            target="_blank"
            rel="noopener noreferrer"
            title="Impressum"
            class="inline-block mx-3 hover:text-moss transition-colors hover:underline decoration-1 underline-offset-4">
            Impressum
          </a>
          <x-buttons.secondary 
            href="https://www.spross.com"
            target="_blank"
            class="flex items-end gap-x-5 group">
            spross.com
            <x-icons.arrow class="w-14 h-auto mt-2 group-hover:translate-x-3 transition-transform" />
          </x-buttons.secondary>
        </div>
      </div>
    </div>
  </x-layout.inner>
</footer>
@vite('resources/js/app.js')
</body>
</html>
<!-- made with ❤ by stoz.ch & marceli.to -->