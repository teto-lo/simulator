@props(['title', 'icon' => null, 'categoryColor' => 'blue'])

@php
    $colorMap = [
        'blue' => 'from-blue-50 to-indigo-50 border-blue-100',
        'purple' => 'from-purple-50 to-violet-50 border-purple-100',
        'green' => 'from-green-50 to-emerald-50 border-green-100',
        'amber' => 'from-amber-50 to-orange-50 border-amber-100',
        'orange' => 'from-orange-50 to-red-50 border-orange-100',
        'pink' => 'from-pink-50 to-rose-50 border-pink-100',
        'cyan' => 'from-cyan-50 to-blue-50 border-cyan-100',
    ];
    
    $iconColorMap = [
        'blue' => 'text-blue-600',
        'purple' => 'text-purple-600',
        'green' => 'text-green-600',
        'amber' => 'text-amber-600',
        'orange' => 'text-orange-600',
        'pink' => 'text-pink-600',
        'cyan' => 'text-cyan-600',
    ];
    
    $bgClass = $colorMap[$categoryColor] ?? $colorMap['blue'];
    $iconColor = $iconColorMap[$categoryColor] ?? $iconColorMap['blue'];
    
    $iconSvg = [
        'lightbulb' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>',
        'chart' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>',
        'info' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>',
        'book' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>',
        'link' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>',
    ];
@endphp

<div class="bg-gradient-to-br {{ $bgClass }} rounded-3xl p-8 mb-8 shadow-xl border-2">
    <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-3">
        @if($icon && isset($iconSvg[$icon]))
            <svg class="w-6 h-6 {{ $iconColor }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                {!! $iconSvg[$icon] !!}
            </svg>
        @endif
        <span class="w-2 h-7 bg-{{ $categoryColor }}-500 rounded-full"></span>
        {{ $title }}
    </h2>
    
    <div class="prose prose-gray max-w-none">
        {{ $slot }}
    </div>
</div>
