<footer class="mt-30 lg:mt-45 2xl:mt-60 pb-20 2xl:pb-35">
  <x-layout.inner>
    <div class="flex justify-start flex-wrap gap-10 lg:gap-15 2xl:gap-20">
      <x-buttons.primary href="https://www.telezueri.ch/zuerinews/das-steckt-hinter-dem-neuen-wandbild-in-zuerich-west-157226119?utm_source=shared-whatsapp&utm_medium=shared&utm_campaign=Social+Media">
        Bericht auf Tele Züri
      </x-buttons.primary>
      <x-buttons.primary href="https://www.instagram.com/redl_one/" class="bg-moss">
        Redl
      </x-buttons.primary>
      <x-buttons.primary href="https://www.instagram.com/fabian_bane_florin/">
        Bane
      </x-buttons.primary>
      <x-buttons.primary href="https://www.spross.com" class="bg-moss">
        Spross
      </x-buttons.primary>
      <x-buttons.primary href="https://www.spross.com/transport-recycling">
        Recyclingwerk
      </x-buttons.primary>
    </div>
    <img 
      src="{{ asset('media/logo-claim.png') }}" 
      alt="Spross Transport & Recycling AG" 
      class="block mx-auto w-full h-auto mt-20 lg:mt-30 max-w-[300px] sm:max-w-[80%] lg:max-w-4xl"
      loading="lazy" />
      <div class="mt-40 md:mt-60 2xl:mt-100">
        <div class="flex justify-center items-center gap-10 lg:gap-15 2xl:gap-20">
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
        <div class="text-xs lg:text-sm text-center text-fern mt-20 lg:mt-40 leading-7 md:leading-none">
          <div class="md:inline">&copy; Spross-Gruppe, {{ date('Y') }}</div><span class="hidden md:inline"> &mdash; </span>
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
            class="flex items-end group mt-10 md:mt-0">
            spross.com
            <x-icons.arrow class="w-12 lg:w-14 h-auto mt-4 lg:mt-2 ml-4 group-hover:translate-x-3 transition-transform" />
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