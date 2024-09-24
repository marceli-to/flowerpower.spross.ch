@extends('app')
@section('content')

<x-hero.wrapper />

<div class="flex flex-col gap-y-40 xl:gap-y-100 my-40 xl:my-100">
  
  <x-layout.inner>
    <p>Das Recyclingwerk der Spross Transport & Recycling AG mitten in Zürich erhält von den beiden international bekannten Schweizer Künstlern REDL & BANE eine komplette Neugestaltung. Die Leidenschaft für das professionelle Recyceln wie auch der Einsatz des bereits in fünfter Generation.</p>
    <p>Mit den verschiedenen Werkgebäuden und Mauern bietet das Areal an der Hohlstrasse 330 hunderte Laufmeter an Flächen, die sich für eine Neugestaltung anbieten.</p>
  </x-layout.inner>

  <div class="px-20">
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