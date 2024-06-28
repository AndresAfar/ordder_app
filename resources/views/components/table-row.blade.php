<!-- resources/views/components/table-row.blade.php -->

<tr class="whitespace-nowrap {{ $attributes->merge(['class' => 'bg-white dark:bg-gray-900']) }}">
    {{ $slot }}
</tr>