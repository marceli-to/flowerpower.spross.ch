@extends('app')
@section('content')

<x-hero.wrapper />

<div class="flex flex-col">
  
  <x-layout.inner class="mt-40 xl:mt-100">
    <p>Im Recyclingwerk von Spross mitten in Zürich läuft immer etwas! Hier wird jeden Tag zerkleinert, sortiert, gesiebt und verwertet, was das Zeug hält. Und neuerdings auch gesprayt! Bye-bye Betongrau: Die international bekannten Schweizer Künstler REDL & BANE haben Turm, Werkgebäude und Mauern auf dem Areal an der Hohlstrasse 330 in ein buntes, urbanes Gesamtkunstwerk verwandelt.</p>
    <p>Auf 1000 Quadratmetern ist so ein starkes Zeichen für Lebensraum mit Zukunft entstanden, in dem clevere Ressourcennutzung und nachhaltiges Denken und Handeln eine zentrale Rolle spielen. Tipp: Den besten Blick auf die wohl spannendste Open-air-Galerie Zürichs hat man von der Hardbrücke aus...</p>
  </x-layout.inner>
  
  <x-layout.inner class="mt-20 xl:mt-60">
    <div x-data="{ selected: null }">
      <x-accordeon.wrapper :index="0">
        <x-accordeon.button :title="'Flowers'" :index="0" />
        <x-accordeon.section :index="0">
          <x-accordeon.item>
            <p>Auf dem riesigen Mural «Flowers» am Betonturm gibt eine Grossmutter ihr wertvolles Wissen über Blumen und Heilpflanzen an ihre Enkelin weiter – Generation verbinden sich, Werte werden bewahrt, Gegenwart trifft auf Zukunft. Der Bildhintergrund ist so gestaltet, dass sich der obere Teil des Turms in der realen Umgebung auflöst – die Stadt wird Teil des Areals, das Areal wird Teil der Stadt.</p>
          </x-accordeon.item>
        </x-accordeon.section>
      </x-accordeon.wrapper>
      <x-accordeon.wrapper :index="1">
        <x-accordeon.button :title="'Recycled Characters'" :index="1" />
        <x-accordeon.section :index="1">
          <x-accordeon.item>
            <p>Spielerisch ergänzt wird das riesige Bild auf dem Betonturm durch die so genannten «Recycled Characters». Die witzigen Abfall- und Wertstoff-Figuren tauchen in unterschiedlichen Konstellationen auf den Werkgebäuden und Mauerflächen auf und sorgen so für überraschende Begegnungen mit dem Thema Recycling.</p>
          </x-accordeon.item>
        </x-accordeon.section>
      </x-accordeon.wrapper>
    </div>
  </x-layout.inner>

  <div class="pl-20 mt-80 xl:mt-160">
    <x-swiper.wrapper>
      <x-swiper.slide>
        <x-media.picture :image="'dummy-1.png'" :alt="'Title'" class="w-full h-full object-cover aspect-1/1" />
      </x-swiper.slide>
      <x-swiper.slide>
        <x-media.picture :image="'dummy-2.png'" :alt="'Title'" class="w-full h-full object-cover aspect-1/1" />
      </x-swiper.slide>
      <x-swiper.slide>
        <x-media.picture :image="'dummy-3.png'" :alt="'Title'" class="w-full h-full object-cover aspect-1/1" />
      </x-swiper.slide>
      <x-swiper.slide>
        <x-media.picture :image="'dummy-4.png'" :alt="'Title'" class="w-full h-full object-cover aspect-1/1" />
      </x-swiper.slide>
      <x-swiper.slide>
        <x-media.picture :image="'dummy-5.png'" :alt="'Title'" class="w-full h-full object-cover aspect-1/1" />
      </x-swiper.slide>
    </x-swiper.wrapper>
  </div>

</div>
@endsection