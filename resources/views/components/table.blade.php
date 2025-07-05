<div class="overflow-x-auto rounded-lg border border-gray-200 shadow-sm">
    <table class="min-w-full divide-y divide-gray-200 text-sm text-left">
        <thead class="bg-gray-100 text-gray-700">
            {{ $head ?? '' }}
        </thead>
        <tbody class="divide-y divide-gray-100 text-gray-800">
            {{ $slot }}
        </tbody>
    </table>
</div>
