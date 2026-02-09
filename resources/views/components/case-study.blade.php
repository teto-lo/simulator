@props(['title', 'categoryColor' => 'blue'])

@php
    $bgColorMap = [
        'blue' => 'bg-gradient-to-br from-blue-50 to-indigo-50 border-blue-100',
        'purple' => 'bg-gradient-to-br from-purple-50 to-violet-50 border-purple-100',
        'green' => 'bg-gradient-to-br from-green-50 to-emerald-50 border-green-100',
        'amber' => 'bg-gradient-to-br from-amber-50 to-orange-50 border-amber-100',
        'orange' => 'bg-gradient-to-br from-orange-50 to-red-50 border-orange-100',
        'pink' => 'bg-gradient-to-br from-pink-50 to-rose-50 border-pink-100',
        'cyan' => 'bg-gradient-to-br from-cyan-50 to-blue-50 border-cyan-100',
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
    
    $bgClass = $bgColorMap[$categoryColor] ?? $bgColorMap['blue'];
    $iconColor = $iconColorMap[$categoryColor] ?? $iconColorMap['blue'];
@endphp

<div class="{{ $bgClass }} rounded-2xl p-8 border-2 shadow-lg mb-6">
    <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
        <svg class="w-5 h-5 {{ $iconColor }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
        {{ $title }}
    </h3>
    
    <div class="space-y-6">
        {{ $slot }}
    </div>
</div>
