# コンテンツ追加ガイドライン

このドキュメントは、新しいツールページや既存ページへのコンテンツ追加時に、デザインの統一性を保ちながらSEOに効果的なコンテンツを作成するためのガイドラインです。

## 目次
1. [基本原則](#基本原則)
2. [コンポーネントの使用方法](#コンポーネントの使用方法)
3. [セクション構成](#セクション構成)
4. [カテゴリー別カラー設定](#カテゴリー別カラー設定)
5. [SEOを意識したコンテンツ作成](#seoを意識したコンテンツ作成)
6. [横展開チェックリスト](#横展開チェックリスト)

---

## 基本原則

### デザイン統一の重要性
- **必ず既存のBladeコンポーネントを使用する**
- カスタムスタイルを直接記述しない
- `DESIGN_RULES.md`に記載されたルールを遵守する

### コンテンツの質
- **テキスト量**: 各ツールページは最低1,500文字以上を目標
- **読みやすさ**: 段落は3-4文で区切る
- **具体性**: 抽象的な説明ではなく、具体例を含める

---

## コンポーネントの使用方法

### 1. コンテンツセクション (`<x-content-section>`)

統一されたセクションコンテナ。背景色、パディング、マージンが自動で適用されます。

```blade
<x-content-section 
    title="セクションタイトル" 
    icon="lightbulb"
    category-color="blue">
    
    <p>セクションの内容をここに記述...</p>
    
</x-content-section>
```

**Props:**
- `title` (required): セクションのタイトル
- `icon` (optional): アイコン名 (lightbulb, chart, info, など)
- `category-color` (required): カテゴリーカラー (blue, purple, green, orange, pink, cyan)

### 2. 情報カード (`<x-info-card>`)

ポイント説明や用語解説に使用するカード。

```blade
<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
    <x-info-card 
        title="カードタイトル"
        category-color="blue">
        
        <p>カードの内容...</p>
        
    </x-info-card>
</div>
```

**Props:**
- `title` (required): カードのタイトル
- `category-color` (required): カテゴリーカラー
- `icon` (optional): アイコン名

### 3. 用語定義 (`<x-term-definition>`)

専門用語の解説に使用。

```blade
<x-term-definition 
    term="CPC（クリック単価）"
    category-color="blue">
    
    <p>広告が1回クリックされるごとに発生する費用のこと。Cost Per Clickの略。</p>
    
</x-term-definition>
```

**Props:**
- `term` (required): 用語名
- `category-color` (required): カテゴリーカラー

### 4. ケーススタディ (`<x-case-study>`)

実際の使用例を示す際に使用。

```blade
<x-case-study 
    title="ケーススタディ: ECサイトの広告運用"
    category-color="blue">
    
    <div class="grid md:grid-cols-2 gap-6">
        <div>
            <h4 class="font-bold text-gray-800 mb-2">Before</h4>
            <p>月間予算: 30万円<br>CV数: 15件<br>CPA: 20,000円</p>
        </div>
        <div>
            <h4 class="font-bold text-emerald-600 mb-2">After</h4>
            <p>月間予算: 30万円<br>CV数: 25件<br>CPA: 12,000円</p>
        </div>
    </div>
    
</x-case-study>
```

**Props:**
- `title` (required): ケーススタディのタイトル
- `category-color` (required): カテゴリーカラー

---

## セクション構成

各ツールページは以下の順序でセクションを配置することを推奨します:

### 1. ヒーローセクション（必須）
- ツール名
- 簡潔な説明（1-2文）
- アイコン

### 2. こんなときに便利（必須）
- 利用シーンを3-6個リストアップ
- 具体的なシチュエーションを記述

### 3. ツール本体（必須）
- 計算フォーム
- 結果表示

### 4. 使い方（必須）
- ステップバイステップの説明
- 各ステップは具体的に

### 5. 詳細説明（推奨）
**新規追加セクション - SEO強化のため**

```blade
<x-content-section 
    title="○○とは？基礎知識" 
    icon="info"
    category-color="blue">
    
    <p class="text-gray-600 leading-relaxed mb-4">
        ○○は、△△を計算するための重要な指標です。
        特に□□の場面で活用されます。
    </p>
    
    <h3 class="text-xl font-bold text-gray-800 mb-3">なぜ○○が重要なのか</h3>
    <p class="text-gray-600 leading-relaxed mb-4">
        具体的な理由を3-4文で説明...
    </p>
    
</x-content-section>
```

**文字数目安**: 300-500文字

### 6. 用語解説（推奨）
**新規追加セクション - SEO強化のため**

```blade
<x-content-section 
    title="関連用語の解説" 
    icon="book"
    category-color="blue">
    
    <div class="space-y-4">
        <x-term-definition term="用語1" category-color="blue">
            <p>用語1の説明...</p>
        </x-term-definition>
        
        <x-term-definition term="用語2" category-color="blue">
            <p>用語2の説明...</p>
        </x-term-definition>
    </div>
    
</x-content-section>
```

**用語数目安**: 3-6個

### 7. ケーススタディ・使用例（推奨）
**新規追加セクション - SEO強化のため**

```blade
<x-content-section 
    title="実際の使用例" 
    icon="chart"
    category-color="blue">
    
    <x-case-study 
        title="ケース1: ○○の場合"
        category-color="blue">
        
        <!-- 具体的な数値と結果を記載 -->
        
    </x-case-study>
    
</x-content-section>
```

**ケース数目安**: 2-3個

### 8. よくある質問（必須）
- Q&A形式
- 実際にユーザーが疑問に思うことを想定

### 9. 関連ツール（推奨）
**新規追加セクション - 内部リンク強化のため**

```blade
<x-content-section 
    title="関連ツール" 
    icon="link"
    category-color="blue">
    
    <div class="grid md:grid-cols-3 gap-6">
        <!-- 関連ツールへのリンクカード -->
    </div>
    
</x-content-section>
```

---

## カテゴリー別カラー設定

`DESIGN_RULES.md`に記載されている通り、各カテゴリーには専用のカラーが設定されています。

| カテゴリー | カラー | 使用例 |
|-----------|--------|--------|
| マーケティング | `blue` / `indigo` | `category-color="blue"` |
| ビジネス分析 | `purple` / `violet` | `category-color="purple"` |
| 金融・投資 | `green` / `emerald` | `category-color="green"` |
| 給与・税金 | `amber` / `orange` | `category-color="amber"` |
| フリーランス・副業 | `orange` / `red` | `category-color="orange"` |
| Web・クリエイター | `pink` / `rose` | `category-color="pink"` |
| 健康・フィットネス | `green` / `emerald` | `category-color="green"` |
| 生活・実用 | `cyan` / `blue` | `category-color="cyan"` |

**重要**: コンポーネント使用時は必ず該当カテゴリーのカラーを指定してください。

---

## SEOを意識したコンテンツ作成

### タイトルタグ
```blade
@php
    $title = '具体的なツール名 | ベネフィット・用途 | 計算ラボ';
    $description = '150文字以内で、ツールの機能、対象ユーザー、メリットを含める';
@endphp
<x-slot name="title">{{ $title }}</x-slot>
<x-slot name="description">{{ $description }}</x-slot>
```

**ポイント**:
- タイトルは60文字以内
- ディスクリプションは150-155文字
- 自然にキーワードを含める

### 見出し構造
```html
<h1>ツール名</h1>              <!-- 1ページに1つのみ -->
<h2>主要セクション</h2>         <!-- 各セクションのタイトル -->
<h3>サブセクション</h3>         <!-- セクション内の小見出し -->
<h4>詳細項目</h4>              <!-- さらに細かい項目 -->
```

### キーワードの自然な配置
- **メインキーワード**: ツール名、計算対象（例: 広告予算、BMI、複利）
- **サブキーワード**: 関連用語、業界用語
- **ロングテールキーワード**: 具体的な使用シーン

**悪い例**: 「広告予算計算ツールは広告予算を計算するツールです。広告予算の計算に便利です。」

**良い例**: 「広告予算シミュレーターは、月間予算・CPC・CVRから獲得件数と利益を自動計算します。Google広告やSNS広告の予算策定に活用できます。」

### 内部リンク
- 関連ツールへのリンクを3-5個配置
- アンカーテキストは具体的に（「こちら」ではなく「ROI計算ツール」）

### 構造化データ
各ページに以下を含める:
- `SoftwareApplication` - ツール情報
- `BreadcrumbList` - パンくずリスト
- `FAQPage` - よくある質問
- `HowTo` - 使い方（該当する場合）

---

## 横展開チェックリスト

新しいツールページを作成する際のチェックリスト:

### 1. ファイル作成
- [ ] `resources/views/livewire/[tool-name].blade.php` を作成
- [ ] `app/Livewire/[ToolName].php` を作成（Livewireコンポーネント）
- [ ] `routes/web.php` にルートを追加
- [ ] サイトマップ生成にページを追加

### 2. メタデータ設定
- [ ] タイトルタグ（60文字以内）
- [ ] メタディスクリプション（150-155文字）
- [ ] OGPタグ
- [ ] 構造化データ（SoftwareApplication, BreadcrumbList, FAQPage）

### 3. コンテンツ構成
- [ ] ヒーローセクション
- [ ] こんなときに便利セクション
- [ ] ツール本体
- [ ] 使い方セクション
- [ ] 詳細説明セクション（300-500文字）
- [ ] 用語解説セクション（3-6個）
- [ ] ケーススタディセクション（2-3個）
- [ ] よくある質問セクション（5-8個）
- [ ] 関連ツールセクション（3-5個）

### 4. デザイン確認
- [ ] カテゴリーカラーが統一されている
- [ ] アイコンは`rounded-full`を使用
- [ ] カード装飾は淡色ソリッド（`from-[color]-100 to-[color]-100`）
- [ ] `DESIGN_RULES.md`のルールに準拠

### 5. SEO確認
- [ ] 総文字数が1,500文字以上
- [ ] 見出し構造（H1-H4）が適切
- [ ] 内部リンクが3-5個配置されている
- [ ] キーワードが自然に配置されている
- [ ] 構造化データが正しく設定されている

### 6. ホームページ更新
- [ ] `home.blade.php`の該当カテゴリーにツールカードを追加
- [ ] ツール数カウントを更新

### 7. テスト
- [ ] ローカル環境で表示確認
- [ ] レスポンシブデザイン確認（SP/PC）
- [ ] リンクが正しく機能するか確認
- [ ] Google Rich Results Testで構造化データを検証

---

## コンテンツ作成のヒント

### 詳細説明セクションの書き方
1. **導入**: ツールが解決する問題を明確に
2. **背景**: なぜこの計算が必要なのか
3. **メリット**: 使用することで得られる具体的な利点
4. **対象者**: どんな人に向いているか

### 用語解説の書き方
- 専門用語を避けて平易な言葉で説明
- 具体例を含める
- 関連用語へのリンクを貼る（将来的に）

### ケーススタディの書き方
- 実際にありそうなシナリオを設定
- Before/Afterで数値を明確に
- 改善のポイントを簡潔に説明

---

## まとめ

このガイドラインに従うことで:
- ✅ デザインの統一性を保てる
- ✅ SEOに効果的なコンテンツを作成できる
- ✅ ユーザーにとって価値のある情報を提供できる
- ✅ 横展開が容易になる

**疑問点があれば**: `DESIGN_RULES.md`と併せて確認してください。
