@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'block px-4 py-2 text-sm font-medium text-gray-900 dark:text-gray-100 bg-gray-100 dark:bg-gray-700'
                : 'block px-4 py-2 text-sm font-medium text-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
