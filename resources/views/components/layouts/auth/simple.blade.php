<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen bg-white antialiased">
        <div class="bg-background flex min-h-svh flex-col items-center justify-center gap-6 p-6 md:p-10">
            <div class="flex w-full max-w-sm flex-col gap-2">
                <a href="{{ route('dashboard') }}" class="flex flex-col items-center gap-2 font-medium" wire:navigate>
                    <div class="flex items-center space-x-2">
                        <div class="flex aspect-square size-18 items-center justify-center rounded-md">
                            <x-app-logo-icon class="size-5 fill-current" />
                        </div>
                        <div class="ms-1 grid flex-1 text-start text-sm">
                            <span class="mb-0.5 truncate leading-tight font-semibold text-[#dc143c] text-2xl">
                                {{ config('app.municipality') }}
                            </span>
                        </div>
                    </div>
                </a>
                <div class="flex flex-col gap-6">
                    {{ $slot }}
                </div>
            </div>
        </div>
        @fluxScripts
    </body>
</html>
