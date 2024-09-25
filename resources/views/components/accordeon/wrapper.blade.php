@props(['index'])
<div data-index="{{ $index }}" {{ $attributes->merge(['class' => 'relative border-t border-t-moss mb-10 xl:mb-25']) }}>
  {{ $slot }}
</div>