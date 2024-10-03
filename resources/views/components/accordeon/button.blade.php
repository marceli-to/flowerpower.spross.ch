@props(['title' => '', 'index'])
<button 
  type="button" 
  {{ $attributes->merge(['class' => 'bg-transparent w-full py-5 2xl:py-10 text-left text-lg sm:text-3xl lg:text-5xl 2xl:text-6xl']) }}
  @click="selected !== {{ $index }} ? selected = {{ $index }} : selected = null;">
  <div class="flex items-center justify-between">
    <div class="uppercase">{{ $title }}</div>
    <template x-if="selected !== {{ $index }}">
      <x-icons.plus class="w-32 lg:w-48 h-auto" />
    </template>
    <template x-if="selected === {{ $index }}">
      <x-icons.minus class="w-32 lg:w-48 h-auto" />
    </template>
  </div>
</button>