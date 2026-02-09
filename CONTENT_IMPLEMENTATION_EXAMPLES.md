# コンテンツ追加の実装例

このファイルは、新しいBladeコンポーネントを使用してコンテンツを追加する実際の例を示します。

## 基本的な使用例

### 1. 詳細説明セクションの追加

```blade
<x-content-section 
    title="広告予算シミュレーターとは？基礎知識" 
    icon="info"
    category-color="blue">
    
    <p class="text-gray-600 leading-relaxed mb-4">
        広告予算シミュレーターは、Web広告運用において最も重要な「予算配分」を科学的に計算するツールです。
        Google広告、Yahoo!広告、SNS広告など、あらゆるデジタル広告媒体に対応しています。
    </p>
    
    <h3 class="text-xl font-bold text-gray-800 mb-3">なぜ広告予算の試算が重要なのか</h3>
    <p class="text-gray-600 leading-relaxed mb-4">
        広告運用では「いくら使えば、何件獲得できるか」を事前に把握することが成功の鍵です。
        根拠のない予算設定は、広告費の無駄遣いや機会損失につながります。
        本ツールを使用することで、データに基づいた論理的な予算策定が可能になります。
    </p>
    
    <h3 class="text-xl font-bold text-gray-800 mb-3">こんな方におすすめ</h3>
    <ul class="list-disc list-inside text-gray-600 space-y-2">
        <li>Web広告の予算編成を任されたマーケティング担当者</li>
        <li>クライアントへの提案資料を作成する広告代理店</li>
        <li>ECサイトや自社サービスの広告運用を内製化したい事業者</li>
        <li>広告効果を最大化したいフリーランス・副業者</li>
    </ul>
    
</x-content-section>
```

### 2. 用語解説セクションの追加

```blade
<x-content-section 
    title="関連用語の解説" 
    icon="book"
    category-color="blue">
    
    <div class="space-y-4">
        <x-term-definition term="CPC（クリック単価 / Cost Per Click）" category-color="blue">
            <p>広告が1回クリックされるごとに発生する費用のこと。検索広告では入札価格や品質スコアによって変動します。
            一般的に、競合が多いキーワードほどCPCは高くなります。</p>
        </x-term-definition>
        
        <x-term-definition term="CVR（コンバージョン率 / Conversion Rate）" category-color="blue">
            <p>広告をクリックしたユーザーのうち、実際に成約（購入、問い合わせなど）に至った割合。
            CVR = CV数 ÷ クリック数 × 100 で計算されます。LPの質やオファーの魅力度に大きく影響されます。</p>
        </x-term-definition>
        
        <x-term-definition term="CPA（獲得単価 / Cost Per Acquisition）" category-color="blue">
            <p>1件のコンバージョンを獲得するためにかかった広告費用。CPA = 広告費 ÷ CV数 で計算されます。
            CPAが商品利益を下回れば、広告運用は黒字となります。</p>
        </x-term-definition>
        
        <x-term-definition term="ROAS（広告費回収率 / Return On Ad Spend）" category-color="blue">
            <p>広告費に対する売上の割合。ROAS = 売上 ÷ 広告費 × 100 で計算されます。
            例えばROAS 300%なら、10万円の広告費で30万円の売上が得られたことを意味します。</p>
        </x-term-definition>
    </div>
    
</x-content-section>
```

### 3. ケーススタディセクションの追加

```blade
<x-content-section 
    title="実際の使用例" 
    icon="chart"
    category-color="blue">
    
    <x-case-study 
        title="ケース1: ECサイトの広告運用改善"
        category-color="blue">
        
        <p class="text-gray-600 mb-4">
            健康食品を販売するECサイトが、Google検索広告の予算配分を見直した事例です。
        </p>
        
        <div class="grid md:grid-cols-2 gap-6">
            <div class="bg-white/50 p-6 rounded-xl">
                <h4 class="font-bold text-gray-800 mb-3 flex items-center gap-2">
                    <span class="text-red-500">❌</span> Before（改善前）
                </h4>
                <dl class="space-y-2 text-sm">
                    <div class="flex justify-between">
                        <dt class="text-gray-600">月間予算:</dt>
                        <dd class="font-bold">30万円</dd>
                    </div>
                    <div class="flex justify-between">
                        <dt class="text-gray-600">CPC:</dt>
                        <dd class="font-bold">200円</dd>
                    </div>
                    <div class="flex justify-between">
                        <dt class="text-gray-600">CVR:</dt>
                        <dd class="font-bold">1.5%</dd>
                    </div>
                    <div class="flex justify-between border-t pt-2">
                        <dt class="text-gray-600">CV数:</dt>
                        <dd class="font-bold text-lg">22件</dd>
                    </div>
                    <div class="flex justify-between">
                        <dt class="text-gray-600">CPA:</dt>
                        <dd class="font-bold text-red-600">13,636円</dd>
                    </div>
                </dl>
            </div>
            
            <div class="bg-white/50 p-6 rounded-xl border-2 border-emerald-200">
                <h4 class="font-bold text-emerald-600 mb-3 flex items-center gap-2">
                    <span>✅</span> After（改善後）
                </h4>
                <dl class="space-y-2 text-sm">
                    <div class="flex justify-between">
                        <dt class="text-gray-600">月間予算:</dt>
                        <dd class="font-bold">30万円</dd>
                    </div>
                    <div class="flex justify-between">
                        <dt class="text-gray-600">CPC:</dt>
                        <dd class="font-bold">150円 <span class="text-xs text-emerald-600">(↓25%)</span></dd>
                    </div>
                    <div class="flex justify-between">
                        <dt class="text-gray-600">CVR:</dt>
                        <dd class="font-bold">2.5% <span class="text-xs text-emerald-600">(↑67%)</span></dd>
                    </div>
                    <div class="flex justify-between border-t pt-2">
                        <dt class="text-gray-600">CV数:</dt>
                        <dd class="font-bold text-lg text-emerald-600">50件</dd>
                    </div>
                    <div class="flex justify-between">
                        <dt class="text-gray-600">CPA:</dt>
                        <dd class="font-bold text-emerald-600">6,000円</dd>
                    </div>
                </dl>
            </div>
        </div>
        
        <div class="mt-6 bg-blue-50 p-4 rounded-xl">
            <h5 class="font-bold text-gray-800 mb-2">改善のポイント</h5>
            <ul class="text-sm text-gray-600 space-y-1">
                <li>✓ ロングテールキーワードへの配分を増やしてCPCを削減</li>
                <li>✓ LPのファーストビューを改善してCVRを向上</li>
                <li>✓ 結果: 同じ予算で獲得件数が2.3倍に増加</li>
            </ul>
        </div>
        
    </x-case-study>
    
</x-content-section>
```

### 4. 関連ツールセクションの追加

```blade
@php
    $relatedTools = [
        [
            'name' => 'ROI計算ツール',
            'url' => '/roi-calculator',
            'description' => '投資対効果を計算して、広告施策の収益性を評価',
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>',
        ],
        [
            'name' => '損益分岐点計算',
            'url' => '/break-even',
            'description' => '固定費・変動費から損益分岐点を算出',
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>',
        ],
        [
            'name' => '複利計算ツール',
            'url' => '/compound-interest',
            'description' => '広告で得た利益を再投資した場合の成長を予測',
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>',
        ],
    ];
@endphp

<x-related-tools :tools="$relatedTools" category-color="blue" />
```

## 完全な実装例（広告予算シミュレーターページへの追加）

以下は、既存の`ad-cost-simulator.blade.php`に新しいコンテンツセクションを追加する完全な例です。
「よくある質問」セクションの前に挿入してください。

```blade
{{-- 詳細説明セクション --}}
<x-content-section 
    title="広告予算シミュレーターとは？" 
    icon="info"
    category-color="blue">
    
    <p class="text-gray-600 leading-relaxed mb-4">
        広告予算シミュレーターは、デジタルマーケティングにおける最も重要な意思決定「予算配分」を、
        データに基づいて科学的に計算するための無料ツールです。月間予算、CPC（クリック単価）、
        CVR（成約率）の3つの指標を入力するだけで、獲得件数、CPA、ROAS、利益を瞬時に試算できます。
    </p>
    
    <h3 class="text-xl font-bold text-gray-800 mb-3 mt-6">なぜ広告予算の事前試算が重要なのか</h3>
    <p class="text-gray-600 leading-relaxed mb-4">
        Web広告運用において「予算をいくら使えば、何件獲得できるか」を事前に把握することは、
        成功の鍵を握ります。根拠のない予算設定は、広告費の無駄遣いや機会損失につながり、
        最悪の場合、事業の収益性を大きく損なう可能性があります。
    </p>
    
    <div class="grid md:grid-cols-2 gap-6 my-6">
        <x-info-card title="予算不足のリスク" category-color="blue">
            <p>十分なクリック数を獲得できず、統計的に有意なデータが集まりません。
            結果として、広告の最適化が進まず、CPAが高止まりする悪循環に陥ります。</p>
        </x-info-card>
        
        <x-info-card title="予算過多のリスク" category-color="blue">
            <p>獲得効率の低いキーワードにまで配信が広がり、無駄なクリックが増加。
            CPAが悪化し、広告費対効果（ROAS）が低下します。</p>
        </x-info-card>
    </div>
    
    <p class="text-gray-600 leading-relaxed">
        本ツールを使用することで、これらのリスクを回避し、最適な予算配分を実現できます。
    </p>
    
</x-content-section>

{{-- 用語解説セクション --}}
<x-content-section 
    title="広告運用の重要指標を理解する" 
    icon="book"
    category-color="blue">
    
    <p class="text-gray-600 mb-6">
        広告運用では、以下の指標を正しく理解し、適切にコントロールすることが重要です。
    </p>
    
    <div class="space-y-4">
        <x-term-definition term="CPC（クリック単価 / Cost Per Click）" category-color="blue">
            <p>広告が1回クリックされるごとに発生する費用。検索広告では、入札価格と品質スコアによって決定されます。
            競合が多いキーワードほどCPCは高くなる傾向にあります。業界平均は50円〜500円程度ですが、
            BtoB商材や高単価商品では1,000円を超えることもあります。</p>
        </x-term-definition>
        
        <x-term-definition term="CVR（コンバージョン率 / Conversion Rate）" category-color="blue">
            <p>広告をクリックしたユーザーのうち、実際に成約（購入、問い合わせ、資料請求など）に至った割合。
            CVR = CV数 ÷ クリック数 × 100 で計算されます。LPの質、オファーの魅力度、ターゲティングの精度に
            大きく影響されます。一般的には1%〜5%が目安ですが、商材によって大きく異なります。</p>
        </x-term-definition>
        
        <x-term-definition term="CPA（獲得単価 / Cost Per Acquisition）" category-color="blue">
            <p>1件のコンバージョンを獲得するためにかかった広告費用。CPA = 広告費 ÷ CV数 で計算されます。
            CPAが商品の利益（売上 - 原価）を下回れば、広告運用は黒字となります。
            許容CPAを事前に設定し、それを超えないように運用することが重要です。</p>
        </x-term-definition>
        
        <x-term-definition term="ROAS（広告費回収率 / Return On Ad Spend）" category-color="blue">
            <p>広告費に対する売上の割合。ROAS = 売上 ÷ 広告費 × 100 で計算されます。
            例えばROAS 300%なら、10万円の広告費で30万円の売上が得られたことを意味します。
            一般的には、ROAS 200%以上が健全な運用の目安とされています。</p>
        </x-term-definition>
        
        <x-term-definition term="ROI（投資対効果 / Return On Investment）" category-color="blue">
            <p>広告費に対する利益の割合。ROI = (売上 - 広告費 - 原価) ÷ 広告費 × 100 で計算されます。
            ROASが売上ベースであるのに対し、ROIは利益ベースで評価するため、
            経営判断にはROIを重視すべきです。</p>
        </x-term-definition>
    </div>
    
</x-content-section>

{{-- ケーススタディセクション --}}
<x-content-section 
    title="実際の活用事例" 
    icon="chart"
    category-color="blue">
    
    <p class="text-gray-600 mb-6">
        実際に広告予算シミュレーターを活用して成果を上げた事例をご紹介します。
    </p>
    
    <x-case-study 
        title="ケース1: ECサイトの広告運用改善"
        category-color="blue">
        
        <p class="text-gray-600 mb-4">
            健康食品を販売するECサイトが、Google検索広告の予算配分を見直した事例です。
        </p>
        
        <div class="grid md:grid-cols-2 gap-6">
            <div class="bg-white/50 p-6 rounded-xl">
                <h4 class="font-bold text-gray-800 mb-3">Before（改善前）</h4>
                <dl class="space-y-2 text-sm">
                    <div class="flex justify-between"><dt>月間予算:</dt><dd class="font-bold">30万円</dd></div>
                    <div class="flex justify-between"><dt>CPC:</dt><dd class="font-bold">200円</dd></div>
                    <div class="flex justify-between"><dt>CVR:</dt><dd class="font-bold">1.5%</dd></div>
                    <div class="flex justify-between border-t pt-2"><dt>CV数:</dt><dd class="font-bold text-lg">22件</dd></div>
                    <div class="flex justify-between"><dt>CPA:</dt><dd class="font-bold text-red-600">13,636円</dd></div>
                </dl>
            </div>
            
            <div class="bg-white/50 p-6 rounded-xl border-2 border-emerald-200">
                <h4 class="font-bold text-emerald-600 mb-3">After（改善後）</h4>
                <dl class="space-y-2 text-sm">
                    <div class="flex justify-between"><dt>月間予算:</dt><dd class="font-bold">30万円</dd></div>
                    <div class="flex justify-between"><dt>CPC:</dt><dd class="font-bold">150円 <span class="text-xs text-emerald-600">(↓25%)</span></dd></div>
                    <div class="flex justify-between"><dt>CVR:</dt><dd class="font-bold">2.5% <span class="text-xs text-emerald-600">(↑67%)</span></dd></div>
                    <div class="flex justify-between border-t pt-2"><dt>CV数:</dt><dd class="font-bold text-lg text-emerald-600">50件</dd></div>
                    <div class="flex justify-between"><dt>CPA:</dt><dd class="font-bold text-emerald-600">6,000円</dd></div>
                </dl>
            </div>
        </div>
        
        <div class="mt-6 bg-blue-50 p-4 rounded-xl">
            <h5 class="font-bold text-gray-800 mb-2">改善のポイント</h5>
            <ul class="text-sm text-gray-600 space-y-1">
                <li>✓ ロングテールキーワードへの配分を増やしてCPCを削減</li>
                <li>✓ LPのファーストビューを改善してCVRを向上</li>
                <li>✓ 結果: 同じ予算で獲得件数が2.3倍に増加</li>
            </ul>
        </div>
    </x-case-study>
    
</x-content-section>

{{-- 関連ツールセクション --}}
@php
    $relatedTools = [
        [
            'name' => 'ROI計算ツール',
            'url' => '/roi-calculator',
            'description' => '投資対効果を計算して、広告施策の収益性を評価',
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>',
        ],
        [
            'name' => '損益分岐点計算',
            'url' => '/break-even',
            'description' => '固定費・変動費から損益分岐点を算出',
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>',
        ],
        [
            'name' => '複利計算ツール',
            'url' => '/compound-interest',
            'description' => '広告で得た利益を再投資した場合の成長を予測',
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>',
        ],
    ];
@endphp

<x-related-tools :tools="$relatedTools" category-color="blue" />
```

## まとめ

これらのコンポーネントを使用することで:
- ✅ デザインの統一性を保ちながらコンテンツを追加できる
- ✅ SEOに効果的なテキスト量を確保できる
- ✅ ユーザーにとって価値のある情報を提供できる
- ✅ 横展開が容易になる

詳細な使用方法は`CONTENT_GUIDELINES.md`を参照してください。
