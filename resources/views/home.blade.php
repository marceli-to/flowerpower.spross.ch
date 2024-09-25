@extends('app')
@section('content')

<x-hero.wrapper />

<div class="flex flex-col">
  
  <x-layout.inner class="mt-40 xl:mt-100">
    <p>Das Recyclingwerk der Spross Transport & Recycling AG mitten in Zürich erhält von den beiden international bekannten Schweizer Künstlern REDL & BANE eine komplette Neugestaltung. Die Leidenschaft für das professionelle Recyceln wie auch der Einsatz des bereits in fünfter Generation.</p>
    <p>Mit den verschiedenen Werkgebäuden und Mauern bietet das Areal an der Hohlstrasse 330 hunderte Laufmeter an Flächen, die sich für eine Neugestaltung anbieten.</p>
  </x-layout.inner>
  
  <x-layout.inner class="mt-20 xl:mt-60">
    <div x-data="{ selected: null }">
      <x-accordeon.wrapper :index="0">
        <x-accordeon.button :title="'Flowers'" :index="0" />
        <x-accordeon.section :index="0">
          <x-accordeon.item>
            <p>Zwei flinke Boxer jagen die quirlige Eva und ihren Mops durch Sylt. Franz jagt im komplett verwahrlosten Taxi quer durch Bayern. Zwölf Boxkämpfer jagen Viktor quer über den grossen Sylter Deich. Vogel Quax zwickt Johnys Pferd Bim. Sylvia wagt quick den Jux bei Pforzheim. Polyfon zwitschernd assen Mäxchens Vögel Rüben, Joghurt und Quark. "Fix, Schwyz!" quäkt Jürgen blöd vom Pass. Victor jagt zwölf Boxkämpfer quer über den grossen Sylter Deich. Falsches Üben von Xylophonmusik quält jeden grösseren Zwerg. Heizölrückstossabdämpfung.</p>
          </x-accordeon.item>
        </x-accordeon.section>
      </x-accordeon.wrapper>
      <x-accordeon.wrapper :index="1">
        <x-accordeon.button :title="'Recycled Characters'" :index="1" />
        <x-accordeon.section :index="1">
          <x-accordeon.item>
            <p>Zwei flinke Boxer jagen die quirlige Eva und ihren Mops durch Sylt. Franz jagt im komplett verwahrlosten Taxi quer durch Bayern. Zwölf Boxkämpfer jagen Viktor quer über den grossen Sylter Deich. Vogel Quax zwickt Johnys Pferd Bim. Sylvia wagt quick den Jux bei Pforzheim. Polyfon zwitschernd assen Mäxchens Vögel Rüben, Joghurt und Quark. "Fix, Schwyz!" quäkt Jürgen blöd vom Pass. Victor jagt zwölf Boxkämpfer quer über den grossen Sylter Deich. Falsches Üben von Xylophonmusik quält jeden grösseren Zwerg. Heizölrückstossabdämpfung.</p>
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