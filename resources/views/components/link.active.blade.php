@props(['active'])

@php
    $classes = $active ?? false ? 'inline-flex items-center  border-b-2 shadow-md shadow-gray-600 border-gray-600 rounded-md text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-red-700 transition duration-150 ease-in-out' : 'inline-flex items-center  border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700  focus:outline-none transition duration-150 ease-in-out hover:scale-150';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
