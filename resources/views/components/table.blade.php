<!-- resources/views/components/table.blade.php -->

<div class="overflow-x-auto">
    <table class="w-full bg-white dark:bg-gray-800">
        <thead>
            <tr>
                {{ $header }}
            </tr>
        </thead>
        <tbody>
            {{ $slot }}
        </tbody>
    </table>
</div>