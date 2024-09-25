@props(['title' => '', 'index'])
<button 
  type="button" 
  {{ $attributes->merge(['class' => 'bg-transparent w-full py-5 text-left']) }}
  @click="selected !== {{ $index }} ? selected = {{ $index }} : selected = null;">
  <div class="flex items-center justify-between">
    <div class="uppercase">{{ $title }}</div>
    <template x-if="selected !== {{ $index }}">
      <x-icons.plus class="w-32 h-auto" />
    </template>
    <template x-if="selected === {{ $index }}">
      <x-icons.minus class="w-32 h-auto" />
    </template>
  </div>
</button>