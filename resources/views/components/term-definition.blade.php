@props(['term', 'categoryColor' => 'blue'])

@php
    $borderColorMap = [
        'blue' => 'border-blue-400',
        'purple' => 'border-purple-400',
        'green' => 'border-green-400',
        'amber' => 'border-amber-400',
        'orange' => 'border-orange-400',
        'pink' => 'border-pink-400',
        'cyan' => 'border-cyan-400',
    ];
    
    $bgColorMap = [
        'blue' => 'bg-blue-50/30',
        'purple' => 'bg-purple-50/30',
        'green' => 'bg-green-50/30',
        'amber' => 'bg-amber-50/30',
        'orange' => 'bg-orange-50/30',
        'pink' => 'bg-pink-50/30',
        'cyan' => 'bg-cyan-50/30',
    ];
    
    $borderClass = $borderColorMap[$categoryColor] ?? $borderColorMap['blue'];
    $bgClass = $bgColorMap[$categoryColor] ?? $bgColorMap['blue'];
@endphp

<div class="border-l-4 {{ $borderClass }} pl-6 py-4 {{ $bgClass }} rounded-r-xl mb-4">
    <dt class="font-bold text-gray-800 mb-2 text-lg">{{ $term }}</dt>
    <dd class="text-gray-600 leading-relaxed">
        {{ $slot }}
    </dd>
</div>
