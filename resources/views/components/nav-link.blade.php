 <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" 

aria-current="page"-->
@props(['href' => '#', 'active' => false])

@php
    $classes = $active
                ? 'rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white'
                : 'rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white';
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
