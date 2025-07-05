<div class="mb-4 space-y-3">
    <h2 class="text-xl font-semibold text-gray-800">{{ $heading }}</h2>
    <nav class="text-sm text-gray-500 mt-1">
        <ol class="flex items-center space-x-1">
            @foreach ($links as $label => $url)
                <li class="flex items-center">
                    @if (!$loop->first)
                        <svg class="w-4 h-4 mx-2 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    @endif

                    @if ($loop->last)
                        <span class="text-gray-800 font-medium">{{ $label }}</span>
                    @else
                        <a href="{{ $url }}" class="text-blue-600 hover:underline">{{ $label }}</a>
                    @endif
                </li>
            @endforeach
        </ol>
    </nav>
</div>
