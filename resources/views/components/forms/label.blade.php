@props(['name', 'label'])

<div class="inline-flex items-center gap-x-3">
    <span class="w-2 h-2 bg-white inline-block"></span>
    <label class="font-bold mr-2" for="{{ $name }}">{{ $label }}</label>
</div>
