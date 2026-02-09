@props(['title', 'categoryColor' => 'blue', 'icon' => null])

@php
    $bgColorMap = [
        'blue' => 'bg-blue-50/50 border-blue-100 hover:border-blue-200',
        'purple' => 'bg-purple-50/50 border-purple-100 hover:border-purple-200',
        'green' => 'bg-green-50/50 border-green-100 hover:border-green-200',
        'amber' => 'bg-amber-50/50 border-amber-100 hover:border-amber-200',
        'orange' => 'bg-orange-50/50 border-orange-100 hover:border-orange-200',
        'pink' => 'bg-pink-50/50 border-pink-100 hover:border-pink-200',
        'cyan' => 'bg-cyan-50/50 border-cyan-100 hover:border-cyan-200',
    ];
    
    $dotColorMap = [
        'blue' => 'bg-blue-400',
        'purple' => 'bg-purple-400',
        'green' => 'bg-green-400',
        'amber' => 'bg-amber-400',
        'orange' => 'bg-orange-400',
        'pink' => 'bg-pink-400',
        'cyan' => 'bg-cyan-400',
    ];
    
    $bgClass = $bgColorMap[$categoryColor] ?? $bgColorMap['blue'];
    $dotClass = $dotColorMap[$categoryColor] ?? $dotColorMap['blue'];
@endphp

<div class="{{ $bgClass }} p-6 rounded-xl border transition-all hover:shadow-md group">
    @if($title)
        <h3 class="font-bold text-gray-800 mb-3 flex items-start gap-3">
            <span class="w-2 h-2 {{ $dotClass }} rounded-full mt-2 flex-shrink-0 group-hover:scale-125 transition-transform"></span>
            <span>{{ $title }}</span>
        </h3>
    @endif
    
    <div class="text-sm text-gray-700 leading-relaxed">
        {{ $slot }}
    </div>
</div>
