@props(['tools' => [], 'categoryColor' => 'blue'])

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
    
    $hoverColorMap = [
        'blue' => 'hover:border-blue-400',
        'purple' => 'hover:border-purple-400',
        'green' => 'hover:border-green-400',
        'amber' => 'hover:border-amber-400',
        'orange' => 'hover:border-orange-400',
        'pink' => 'hover:border-pink-400',
        'cyan' => 'hover:border-cyan-400',
    ];
    
    $textColorMap = [
        'blue' => 'text-blue-600',
        'purple' => 'text-purple-600',
        'green' => 'text-green-600',
        'amber' => 'text-amber-600',
        'orange' => 'text-orange-600',
        'pink' => 'text-pink-600',
        'cyan' => 'text-cyan-600',
    ];
    
    $bgClass = $bgColorMap[$categoryColor] ?? $bgColorMap['blue'];
    $hoverClass = $hoverColorMap[$categoryColor] ?? $hoverColorMap['blue'];
    $textColor = $textColorMap[$categoryColor] ?? $textColorMap['blue'];
@endphp

<div class="{{ $bgClass }} rounded-3xl p-8 mb-8 shadow-xl border-2">
    <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-3">
        <svg class="w-6 h-6 {{ $textColor }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
        </svg>
        <span class="w-2 h-7 bg-{{ $categoryColor }}-500 rounded-full"></span>
        関連ツール
    </h2>
    
    <div class="grid md:grid-cols-3 gap-6">
        @foreach($tools as $tool)
            <a href="{{ $tool['url'] }}" class="group block">
                <div class="bg-white rounded-2xl p-6 shadow-md border-2 border-transparent {{ $hoverClass }} transition-all hover:shadow-xl transform hover:-translate-y-1">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="w-10 h-10 bg-gradient-to-br from-{{ $categoryColor }}-500 to-{{ $categoryColor }}-600 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                {!! $tool['icon'] ?? '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>' !!}
                            </svg>
                        </div>
                        <h3 class="font-bold text-gray-800 group-hover:{{ $textColor }} transition-colors">
                            {{ $tool['name'] }}
                        </h3>
                    </div>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        {{ $tool['description'] }}
                    </p>
                </div>
            </a>
        @endforeach
    </div>
</div>
