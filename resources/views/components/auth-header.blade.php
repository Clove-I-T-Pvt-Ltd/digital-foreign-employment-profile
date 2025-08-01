@props([
    'title',
    'description',
])

<div class="flex w-full flex-col text-center">
    <flux:heading size="font-bold">{{ $title }}</flux:heading>
    <flux:subheading>{{ $description }}</flux:subheading>
</div>
